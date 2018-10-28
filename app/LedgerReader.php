<?php 
namespace App;

use App\Services\Parser\RawParser;


class LedgerReader{
    
    const CSV_FORMAT ='csv';
    const RAW_FORMAT ='raw';
 
    protected $parser;

    public function parse($path ,$format ='raw')
    {
        $reader = New \SplFileObject(realpath($path));

        //$reader->setFlags(\SplFileObject::READ_CSV);

        // if($format=='raw')
        // {
        //     $reader->setCsvControl("\t");
        // }elseif($format=='csv')
        // {
        //     $reader->setCsvControl(",");
        // }else {
        //     throw new \RuntimeException("Unknow format". $format);
        // }

        $this->parser = $this->makeParser($format);
        

        return $this->readTransactions($reader);

        return $this->readTransactions($reader,$format);
    }


    public function readTransactions($reader,$format)
    {

        $parser = $this->makeParser($format);

        $transactions = [];

        if ($format == 'raw')
        {
            $parser = new ParseRawStrategy;
        }else {
            $parser = new ParseCsvStrategy;
        }
        
        foreach($reader as $record)
        {
            if($record[0] ==null)
            {
                continue;
            }

            // if($format == 'raw')
            // {
            //     $transactions[] = (new ParseRawStrategy)->parse($record); // $this->pareseRawRecord($record);
            // }else {
            //     $transactions[] = (new PareseCsvStrategy)->parse($record); //$this->pareseCsvRecord($record);
            // }
            
            $transactions[]=$parser->parse($record);
            //$transactions[]=$this->pareseRecord($record);
        }

        return $transactions;
    }

    public function markParser($format)
    {

        $factory = new ParserFactory;
        return $factory->make($format);


        switch($format){
            case SELF::RAW_FORMAT:
                return new RawParser;
            case SELF::CSV_FORMAT:
                return new CsvParser;

            default:
                throw new \RuntimeException("Unknow format" . $format);
        }   

        if ($format == 'raw') {
            return new ParseRawStrategy;
        } elseif($format =='csv') {
            return new ParseCsvStrategy;
        } else {
            throw new \RuntimeException("Unknow format". $format);
        }
        
    }


    public function parseRecord($record)
    {
        $type = $this->getType(array_splice($record ,-3));

        return new Transaction([
            'date' => Carbon::parse($record[0]),
            'description'=> $record[1],
            'type' => $type,
        ]);
    }

    protected function getType($attributes)
    {
        [$debeit,$credit] = $attributes;

        if($credit==TransactionType::NOT_APPLICABLE)
        {
            return new Debit($this->toCents($debit));
        }

        return new Credit($this->toCents($debit));

    }

}