<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TaxtronLoad extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'taxtron:load {filePath} {--format= : the format we are going to use}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {                   
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()//LedgerReader $reader)
    {


        //$filePath = $this->argument('filePath');
        // $reader = $this->makeReader($this->option('format'));
        $reader = $factory->make($this->option('format'));

       
        $transactions  = $reader->parse($this->argument('filePath'));

        foreach($transactions as $transaction){
            $transaction->categorize();
            $transaction->save();
        }

        //$this->info($filePath);



    }

    private function markEeader($format)
    {
        $factory = new ParserFactory;

        return new LedgerReader($factory->make($format));
    }
}
