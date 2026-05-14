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
        for($i = 1; $i <= 50; $i++) {

    DB::table('freelancer')->insert([
        'name' => 'abc' . rand(1, 1000),
        'email' => 'abc' . rand(1, 1000) . '@gmail.com'
    ]);
}
        // DB::table('freelancer')->insert([
        //     [
        //         'name' => 'kishlay',
        //         'email' => 'kkishlay502@gmail.com'
        //     ],
        //     [
        //         'name' => 'kishlay2',
        //         'email' => 'kkishlay503@gmail.com'
        //     ],
        //     [
        //         'name' => 'kishlay3',
        //         'email' => 'kkishlay504@gmail.com'
        //     ]
        // ]);
    }
}