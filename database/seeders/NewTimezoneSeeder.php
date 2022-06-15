<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewTimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $handle = fopen(url('timezones.txt'), "r");
        if ($handle) {
            while (($timezone = fgets($handle)) !== false) {
                DB::table('new_timezones')->insert(['timezone' => $timezone]);
            }
            fclose($handle);
        } else {
            // error opening the file.
        } 
        
    }
}
