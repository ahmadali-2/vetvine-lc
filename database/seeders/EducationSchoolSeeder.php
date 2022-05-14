<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EducationSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_school_names')->insert([
            ['school_name' => 'Australia - Murdoch University, Division of Veterinary and Biomedical Sciences'],
            ['school_name' => 'Australia - The University of Melbourne, Faculty of Veterinary Science'],
            ['school_name' => 'Australia - The University of Sydney, Faculty of Veterinary Science'],
            ['school_name' => 'Canada - Université de Montréal'],
            ['school_name' => 'Canada - University of Calgary'],
            ['school_name' => 'Canada - University of Guelph'],
            ['school_name' => 'Canada - University of Prince Edward Island'],
            ['school_name' => 'Canada - University of Saskatchewan'],
            ['school_name' => 'England - University of London, The Royal Veterinary College'],
            ['school_name' => 'Ireland - University College Dublin, School of Agriculture, Food Science &amp; Veterinary Medicine'],
            ['school_name' => 'Mexico - Universidad Nacional Autonoma de México, Facultad de Medicina Veterinaria y Zootecnia'],
            ['school_name' => 'New Zealand - Massey University College of Sciences, Institute of Veterinary, Animal, and Biomedical  Sciences'],
            ['school_name' => 'Scotland - The University of Edinburgh, Royal (Dick) School of Veterinary Studies'],
            ['school_name' => 'Scotland - University of Glasgow, Faculty of Veterinary Medicine'],
            ['school_name' => 'The Netherlands - State University of Utrecht, Faculty of Veterinary Medicine'],
            ['school_name' => 'USA - Auburn University'],
            ['school_name' => 'USA - Colorado State University'],
            ['school_name' => 'USA - Cornell University'],
            ['school_name' => 'USA - Iowa State University'],
            ['school_name' => 'USA - Kansas State University'],
            ['school_name' => 'USA - Louisiana State University'],
            ['school_name' => 'USA - Michigan State University'],
            ['school_name' => 'USA - Mississippi State University'],
            ['school_name' => 'USA - North Carolina State University'],
            ['school_name' => 'USA - Ohio State University'],
            ['school_name' => 'USA - Oklahoma State University'],
            ['school_name' => 'USA - Oregon State University'],
            ['school_name' => 'USA - Purdue University'],
            ['school_name' => 'USA - Texas A &amp; M University'],
            ['school_name' => 'USA - Tufts University'],
            ['school_name' => 'USA - Tuskegee University'],
            ['school_name' => 'USA - University of California, Davis'],
            ['school_name' => 'USA - University of Florida'],
            ['school_name' => 'USA - University of Georgia'],
            ['school_name' => 'USA - University of Illinois at Urbana-Champaign'],
            ['school_name' => 'USA - University of Minnesota'],
            ['school_name' => 'USA - University of Missouri'],
            ['school_name' => 'USA - University of Pennsylvania'],
            ['school_name' => 'USA - University of Tennessee'],
            ['school_name' => 'USA - University of Wisconsin-Madison'],
            ['school_name' => 'USA - Virginia-Maryland Regional College of Veterinary Medicine'],
            ['school_name' => 'USA - Washington State University'],
            ['school_name' => 'USA - Western University of Health Sciences'],
            ['school_name' => 'West Indies - Ross University School of Veterinary Medicine']

    ]);
    }
}
