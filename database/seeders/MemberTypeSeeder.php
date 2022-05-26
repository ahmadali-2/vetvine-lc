<?php

namespace Database\Seeders;

use App\Models\MemberTypes;
use Illuminate\Database\Seeder;

class MemberTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberTypes::create([
            'member_type' => 'Super Admin',
        ]);
        MemberTypes::create([
            'member_type' => 'Public',
        ]);
        MemberTypes::create([
            'member_type' => 'Pet Owner',
        ]);
        MemberTypes::create([
            'member_type' => 'Vet Professional',
        ]);
        MemberTypes::create([
            'member_type' => 'Pet Professional',
        ]);
        MemberTypes::create([
            'member_type' => 'Pet Owner Premium',
        ]);
        MemberTypes::create([
            'member_type' => 'Vet Professional Premium',
        ]);
        MemberTypes::create([
            'member_type' => 'Pet Professional Premium',
        ]);
    }
}
