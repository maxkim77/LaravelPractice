<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sample;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sample::create([
            "name" => "시드작업",
            "description" => "시드작업을 실행해보았습니다.",
            "votes" => 5,
        ]);
    }
}
