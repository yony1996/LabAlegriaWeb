<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::create([
            'name'=>"sangre",
            'description'=>"no hay descripcion",
            'status'=>1,
        ]);
        Exam::create([
            'name'=>"orina",
            'description'=>"no hay descripcion",
            'status'=>1,
        ]);
        Exam::create([
            'name'=>"heses",
            'description'=>"no hay descripcion",
            'status'=>1,
        ]);
        Exam::create([
            'name'=>"covid",
            'description'=>"no hay descripcion",
            'status'=>1,
        ]);
    }
}
