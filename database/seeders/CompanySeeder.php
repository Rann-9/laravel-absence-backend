<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT. ABC',
            'address' => 'Jl. Raya No. 1',
            'email' => 'abc@gmail.com',
            'latitude' => '-6.123456',
            'longtitude' => '106.123456',
            'radius_km' => '2',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);
    }
}
