<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=> 'Admin',
                'role'=> 'admin',
                'password'=> bcrypt('2023SMK')
            ],
            [
                'name'=> 'Kepala Sekolah',
                'role'=> 'kepsek',
                'password'=> bcrypt('2023SMK')
            ],
            
        ];
        foreach ($userData as $key => $value) {
            User::create($value);
        }

    }
}
