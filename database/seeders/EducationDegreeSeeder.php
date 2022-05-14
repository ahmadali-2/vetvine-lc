<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EducationDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            ['degree_name' => 'AA - Associate of Arts'],
            ['degree_name' => 'AAS'],
            ['degree_name' => 'AB - Associate in Business'],
            ['degree_name' => 'ACCC / AVCA - Animal Chiropractic Certification Commission / American Veterinary Chiropractic'],
            ['degree_name' => 'AGS'],
            ['degree_name' => 'AST'],
            ['degree_name' => 'BA - Bachelor of Arts'],
            ['degree_name' => 'BAA'],
            ['degree_name' => 'BAg - Bachelor of Agriculture'],
            ['degree_name' => 'BASc'],
            ['degree_name' => 'BBA'],
            ['degree_name' => 'BBus'],
            ['degree_name' => 'BCom'],
            ['degree_name' => 'BFA'],
            ['degree_name' => 'BS - Bachelor of Science'],
            ['degree_name' => 'BSA - Bachelor of Science in Agriculture'],
            ['degree_name' => 'BSc'],
            ['degree_name' => 'BVetMed - Bachelor of Veterinary Medicine'],
            ['degree_name' => 'BVSc - Bachelor of Veterinary Science'],
            ['degree_name' => 'ChD - Doctor of Chemistry'],
            ['degree_name' => 'CVA - Certified Veterinary Acupuncturist'],
            ['degree_name' => 'CVCHM - Certified Veterinary Chinese Herbal Medicine'],
            ['degree_name' => 'DCh - Doctor of Chemistry'],
            ['degree_name' => 'DrPH - Doctor of Public Health'],
            ['degree_name' => 'DS - Doctor of Science'],
            ['degree_name' => 'DVM - Doctor of Veterinary Medicine'],
            ['degree_name' => 'DVSc - Doctor of Veterinary Science'],
            ['degree_name' => 'JD - Juris Doctor'],
            ['degree_name' => 'MA - Master of Arts'],
            ['degree_name' => 'MAg - Master of Agriculture'],
            ['degree_name' => 'MBA - Master of Business Administration'],
            ['degree_name' => 'MCh - Master of Chemistry'],
            ['degree_name' => 'MEd- Master of Education'],
            ['degree_name' => 'MHA - Master of Hospital Administration'],
            ['degree_name' => 'MPH - Master of Public Health'],
            ['degree_name' => 'MPVM - Master of Preventive Veterinary Medicine'],
            ['degree_name' => 'MRCVS - Member of the Royal College of Veterinary Surgeons'],
            ['degree_name' => 'MS - Master of Science'],
            ['degree_name' => 'MsPH - Master of Science in Public Health'],
            ['degree_name' => 'MVD - Doctor of Veterinary Medicine'],
            ['degree_name' => 'MVSc - Master of Veterinary Science'],
            ['degree_name' => 'MVZ - Medico Veterinario Zootecnista'],
            ['degree_name' => 'PharmD - Doctor of Pharmacy'],
            ['degree_name' => 'PhD - Doctor of Philosophy'],
            ['degree_name' => 'ScD - Doctor of Science'],
            ['degree_name' => 'VMD - Doctor of Veterinary Medicine']
    ]);
    }
}
