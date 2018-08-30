<?php

namespace Adamhut\Achievements\Console;

use Illuminate\Console\Command;

class GenerateAchievementCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adamhut:make-achievement {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate a new Achievement class stub';

   
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$this->info('get started!!');
        $stub = $this->compileTemplate();
        
        $path = app_path('adamhut/Achievements/Types/'. $this->argument('name').'.php');

        file_put_contents($path, $stub);

        $this->info($path ." was created");
    }


    public function compileTemplate()
    {
        $name = $this->argument('name');

        $stub = file_get_contents(app_path('adamhut/Achievements/Console/Stubs/achievement.stub'));
        return str_replace('{{CLASS}}', $this->argument('name'), $stub);
    }
}
