<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = 'user';
        for ($i = 1; $i <= 12; $i++) {
            User::create([
                "id" => $i,
                "name" => $i == 1 ? "superadmin" : $characters . $i,
                "email" => $i == 1 ? "superadmin@gmail.com" : $characters . $i . "@gmail.com",
                "password" => Hash::make('12345678'),
                "type" => $i,
                "status" => 1,
                "network_id" => rand(1, 10),
                "timezone_id" => rand(1, 70),
                "email_verified_at" => now(),
                "is_searchable" => 1,
                "is_show_profileviewers" => 1,
                "invites_other_users" => 1,
                "is_invitable" => 1,
                "avatar" => "avatar.png",
                "messenger_color" => "#2180f3",
                'creation_ip' => request()->ip(),
                'last_login_ip' => request()->ip(),
                'last_login_date' => now(),
            ]);
        }
    }
}
