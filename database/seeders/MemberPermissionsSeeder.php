<?php

namespace Database\Seeders;

use App\Models\MemberPermission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($id = 1; $id < 13; $id++) {
            if ($id == 1) {
                MemberPermission::create([
                    'membertype_id' => $id,
                    'dashboard' => '1',
                    'ads' => '1',
                    'webinars' => '1',
                    'forums' => '1',
                    'videos' => '1',
                    'manage' => '1',
                    'settings' => '1',
                    'membership_plans' => '1',
                    'member_level' => '1',
                    'manage_users' => '1',
                    'coupons' => '1',
                    'mail_to_users' => '1',
                    'guest_registration_fee' => '1',
                    'static_pages' => '1'
                ]);
            } else if ($id == 9 || $id == 10 || $id == 11 || $id == 12) {
                MemberPermission::create([
                    'membertype_id' => $id,
                    'dashboard' => '1',
                ]);
            } else {
                MemberPermission::create([
                    'membertype_id' => $id,
                ]);
            }
        }
    }
}
