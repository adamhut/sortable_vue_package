<?php 
namespace App\Services\Parser;

class RawParser implements Parser{
    
    public function parse(string $line) : Transaction
    {
        $record  = str_getcsv($line,"\t");

        $type = $this->getType(array_splice($record, -3));

        return new Transaction([
            'date' => Carbon::parse($record[0]),
            'description' => $record[1],
            'type' => $type,
        ]);
    }


    protected function getType($attributes)
    {
        [$debeit, $credit] = $attributes;

        if ($credit == TransactionType::NOT_APPLICABLE) {
            return new Debit($this->toCents($debit));
        }

        return new Credit($this->toCents($debit));

    }
}