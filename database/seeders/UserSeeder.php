<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Sheri Vetvine',

            'email' => 'superadmin1@gmail.com',

            'password' => bcrypt('12345678'),

            'type' => 1,

            'email_verified_at' => now(),

            'status' => 1,

            'timezone_id' => 1,

            'creation_ip' => request()->ip(),

            'last_login_ip' => request()->ip(),

            'last_login_date' => now(),

        ]);
    }
}
