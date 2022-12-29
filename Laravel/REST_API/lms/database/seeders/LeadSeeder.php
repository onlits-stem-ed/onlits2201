<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leads')->insert([
            'first_name' => 'Mrityunjay',
            'last_name' => 'Kumar',
            'email' => 'mrityunjay.kumar@onlits.com',
            'contact_no' => '8745623125',
        ]);
    }
}