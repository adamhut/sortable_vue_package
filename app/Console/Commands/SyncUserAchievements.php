<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncUserAchievements extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adamhut:sync-user-achievements';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync All User Achievements in the database ';

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
    public function handle()
    {
        //get all user in the db
        //chunck them to save memory
        User::chunk(100,function($users,$index){

            $this->reportProgress($index);
           

            $users->each(function($user){
                $user->achievements()->sync(
                    app('achievements')->filter(function ($achievement) use ($user) {
                        return $achievement->qualifier($user);
                    })->map(function ($achievement) {
                        return $achievement->modelKey();
                    })
                );
            });
        });
        $this->info("Finished");
       

        //foreach user. 
    }

    protected function reportProgress($index)
    {
        $from = ($index - 1) * 100;
        $to = $index * 100;

        $this->info("Syncing achievement user {$from} to  {$to}");
    }
}
