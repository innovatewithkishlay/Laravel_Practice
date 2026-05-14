<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('freelancer')->insert([
            [
                'name' => 'kishlay',
                'email' => 'kkishlay502@gmail.com'
            ],
            [
                'name' => 'kishlay2',
                'email' => 'kkishlay503@gmail.com'
            ],
            [
                'name' => 'kishlay3',
                'email' => 'kkishlay504@gmail.com'
            ]
        ]);
    }
}