<?php
namespace App\Factory;

use App\LedgerReader;


class LedgerReaderFactory{
    
    private $parserFactory;

    public function __construct(ParserFactory $factory)
    {
        $this->parserFactory = $factory;
    }

    public function make($format) :LedgerReader
    {
        return new LedgerReader($this->parserFactory->make($format));
    }
}