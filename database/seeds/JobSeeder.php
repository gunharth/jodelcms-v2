<?php

use Illuminate\Database\Seeder;
use App\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Job::class,20)->create();
	        // ->each(function ($j) {
	        // 	$i = 1;
	        // 	while( $i < 6 ) {
         //        $j->items()->save(factory(App\Item::class)->make());
         //        $i++;
         //    }
            // }
            // );
    }
}
