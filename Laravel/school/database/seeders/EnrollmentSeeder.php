<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enrollment = new Enrollment();
        $enrollment->enrollment_no = 1;
        $enrollment->first_name = "Ajay";
        $enrollment->middle_name = "Kumar";
        $enrollment->last_name = "Rathore";
        $enrollment->email = "ajaykumar.rathore@gmail.com";
        $enrollment->class = "NUR";
        $enrollment->save();

        $enrollment = new Enrollment();
        $enrollment->enrollment_no = 2;
        $enrollment->first_name = "Kumari";
        $enrollment->middle_name = "Vageesha";
        $enrollment->last_name = "Soni";
        $enrollment->email = "vageeshasoni@gmail.com";
        $enrollment->class = "JKG";
        $enrollment->save();

        $enrollment = new Enrollment();
        $enrollment->enrollment_no = 3;
        $enrollment->first_name = "Aman";
        $enrollment->middle_name = "Kumar";
        $enrollment->last_name = "Mandal";
        $enrollment->email = "amankumar.mandal@gmail.com";
        $enrollment->class = "SKG";
        $enrollment->save();

        $enrollment = new Enrollment();
        $enrollment->enrollment_no = 4;
        $enrollment->first_name = "Surya";
        $enrollment->middle_name = "Kumar";
        $enrollment->last_name = "Yadav";
        $enrollment->email = "suryakumar.yadav@gmail.com";
        $enrollment->class = "NUR";
        $enrollment->save();

        $enrollment = new Enrollment();
        $enrollment->enrollment_no = 5;
        $enrollment->first_name = "Umesh";
        $enrollment->middle_name = "Chand";
        $enrollment->last_name = "Gothia";
        $enrollment->email = "umesh.chandgothia@gmail.com";
        $enrollment->class = "I";
        $enrollment->save();
    }
}
