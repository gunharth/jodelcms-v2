<?php

use Illuminate\Database\Seeder;
use App\TimelineEntry;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/projects.json");
        $data = json_decode($json);
        foreach($data as $obj) {
            TimelineEntry::create(array(
                'title' => $obj->title,
                'description' => $obj->description,
                'started_at' => $obj->started_at
            ));
        }
    }
}
