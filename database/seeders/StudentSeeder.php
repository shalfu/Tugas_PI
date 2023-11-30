<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            ['name'=>'Shalfa','id_course'=>21,'age'=>21,'classroom'=>'PTI B'],
            ['name'=>'Salsa','id_course'=>23,'age'=>21,'classroom'=>'PTI B'],
            ['name'=>'Deyasmei','id_course'=>23,'age'=>21,'classroom'=>'PTI B'],
            ['name'=>'Hana','id_course'=>22,'age'=>21,'classroom'=>'PTI B'],
            ['name'=>'Sifa','id_course'=>21,'age'=>21,'classroom'=>'PTI B'],
            
            ]);
    }
}
