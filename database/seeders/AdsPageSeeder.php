<?php

namespace Database\Seeders;

use App\Models\AdsPage;
use Illuminate\Database\Seeder;

class AdsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'name' => 'Form Post',
                'slug' => 'form-post',
            ]
            ];
        AdsPage::insert($pages);
    }
}
