<?php
namespace App\Factory;

class ParserFactory{

    const CSV_FORMAT = 'csv';
    const RAW_FORMAT = 'raw';

    public function make($format) :parser
    {
        switch ($format) {
            case SELF::RAW_FORMAT:
                return new RawParser;
            case SELF::CSV_FORMAT:
                return new CsvParser;

            default:
                throw new \RuntimeException("Unknow format" . $format);
        }   
    }
}