<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Generals\TimeZone;
use Illuminate\Support\Facades\DB;

class TimeZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pushing Timezones.
        $handle = fopen(url('timezones.txt'), "r");
        if ($handle) {
            while (($timezone = fgets($handle)) !== false) {
                $timeZoneArray = explode("||", $timezone);
                DB::table('time_zones')->insert([
                    'timezone' => $timeZoneArray[0],
                    'region' => $timeZoneArray[1],
                ]);
            }
            fclose($handle);
        } else {
            // error opening the file.
        }
    }
}
