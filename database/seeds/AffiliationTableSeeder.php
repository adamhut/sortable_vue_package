<?php

use Illuminate\Database\Seeder;
use App\Affiliation;

class AffiliationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Affiliation::class)->create(['name'=>'conservative']);
        factory(Affiliation::class)->create(['name' => 'liberal']);
    }
}
