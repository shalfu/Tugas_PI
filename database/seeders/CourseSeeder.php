<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert([
            ['id_course'=>21,'course_name'=>'Sistem Basis Data','description'=>'PTI'],
            ['id_course'=>22,'course_name'=>'Pemograman Internet','description'=>'PTI'],
            ['id_course'=>23,'course_name'=>'Pemograman Visual','description'=>'PTI']
        ]);
    }
}
