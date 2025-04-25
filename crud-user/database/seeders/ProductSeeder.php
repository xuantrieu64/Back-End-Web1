<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    const MAX_RECORDS = 100;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < self::MAX_RECORDS; $i++) {
            DB::table('products')->insert([
                [
                    'name' => 'ao khoach',
                    'image' => 'image1',
                    'quantity' => rand(1, 50),
                    'description' => 'Dong goi can than',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
