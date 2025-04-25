<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    const MAX_RECORDS = 100;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < self::MAX_RECORDS; $i++) {
            DB::table('orders')->insert([
                [
                    'user_id' => $i,
                    'total_amount' => rand(100, 1000000) / 100,
                    'address' => Str::random(20),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
