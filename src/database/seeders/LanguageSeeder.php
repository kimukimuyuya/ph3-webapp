<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('languages')->insert([[
            'id' => 1,
            'language' => 'HTML'
        ],
        [
            'id' => 2,
            'language' => 'CSS'
        ],
        [
            'id' => 3,
            'language' => 'JavaScript'
        ],
        [
            'id' => 4,
            'language' => 'PHP'
        ],
        [
            'id' => 5,
            'language' => 'Laravel'
        ],
        [
            'id' => 6,
            'language' => 'SQL'
        ],
        [
            'id' => 7,
            'language' => 'SHELL'
        ],
        [
            'id' => 8,
            'language' => '情報システム（その他）'
        ]
        ]);

    }
}
