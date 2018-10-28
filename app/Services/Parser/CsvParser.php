<?php 
namespace App\Services\Parser;

class CsvParser implements Parser{

    public function parse(string $line) : Transaction
    {
        $record = str_getcsv($line);

        $type = $this->getType(array_splice($record, -2));

        return new Transaction([
            'date' => Carbon::parse($record[0]),
            'description' => $record[1],
            'type' => $type,
        ]);
    }


    protected function getType($attributes)
    {
        [$credit, $debit] = $attributes;

        return $credit ?  new Credit($this->toCents($debit)): new Debit($this->toCents($debit));;
    }

    public function toCents($amount)
    {
        return $amount*100;
    }

}