<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'brand' => 'BMW',
            'type' => '2 series',
            'mileage' => '12000 km',
            'color' => 'silver',
            'price' => '35000',
            'sold' => false,
        ]);
        DB::table('cars')->insert([
            'brand' => 'Audi',
            'type' => 'A4',
            'mileage' => '18000 km',
            'color' => 'black',
            'price' => '28000',
            'sold' => false,
        ]);

        DB::table('users')->insert([
            'name' => 'Demo Account',
            'email' => 'demo@demo.com',
            'password' => Hash::make('password123'),
        ]);

    }
}
