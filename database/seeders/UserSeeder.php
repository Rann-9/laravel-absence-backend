<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create(); // dinamis: data dibuatkan data random oleh laravel

        User::factory()->create([ // statis
            'name' => 'Muhammad Jahran',
            'email' => 'muhammadjahran@gmail.com',
            'position' => 'Manager',
            'department' => 'IT',
            'password' => Hash::make('12345678'),
        ]);
    }
}
