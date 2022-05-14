<?php

namespace Database\Seeders;
use App\Models\VetvineUsers\SkillAndExpertise;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SkillsAndExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill_and_expertises')->insert([
            ['name' => 'Aquatic'],
            ['name' => 'Avian'],
            ['name' => 'Bovine (Beef predominant)'],
            ['name' => 'Bovine (Dairy predominant)'],
            ['name' => 'Canine'],
            ['name' => 'Caprine'],
            ['name' => 'Equine (exclusive)'],
            ['name' => 'Equine (predominant)'],
            ['name' => 'Exotics'],
            ['name' => 'Feline'],
            ['name' => 'Laboratory Animal'],
            ['name' => 'Ovine / Caprine'],
            ['name' => 'Porcine'],
            ['name' => 'Poultry'],
            ['name' => 'Rabbits'],
            ['name' => 'Reptiles'],
            ['name' => 'Small mammals'],
            ['name' => 'Wildlife'],
            ['name' => 'Zoo animals']
    ]);
    }
}
