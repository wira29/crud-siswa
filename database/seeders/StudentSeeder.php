<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create(
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'address' => 'Banyuwangi',
                'asal_sekolah' => 'SMK Muh 9 Gambiran',
                'jenis_kelamin' => 'L',
            ]
        );
    }
}
