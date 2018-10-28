<?php 
namespace App\Services\Parser;


interface Parser{
    public function parse(string $line): Transaction;
}