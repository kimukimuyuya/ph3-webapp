<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hour;
use Illuminate\Support\Facades\DB;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('hours')->insert([
        [
            'date' => '2023-06-01',
            'hours' => '5',
        ],
        [
            'date' => '2023-06-02',
            'hours' => '3',
        ],
        [
            'date' => '2023-06-03',
            'hours' => '2',
        ],
        [
            'date' => '2023-06-04',
            'hours' => '4',
        ],
        [
            'date' => '2023-06-05',
            'hours' => '6',
        ],
        [
            'date' => '2023-06-06',
            'hours' => '5',
        ],
        [
            'date' => '2023-06-07',
            'hours' => '1',
        ],
        [
            'date' => '2023-06-08',
            'hours' => '4',
        ],
        [
            'date' => '2023-06-09',
            'hours' => '6',
        ],
        [
            'date' => '2023-06-10',
            'hours' => '3',
        ],
        [
            'date' => '2023-06-11',
            'hours' => '2',
        ],
        [
            'date' => '2023-06-12',
            'hours' => '4',
        ],
    ]);
    }
}
