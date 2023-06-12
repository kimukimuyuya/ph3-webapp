<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contents')->insert([[
            'id' => 1,
            'content' => 'N予備校'
        ],
        [
            'id' => 2,
            'content' => 'ドットインストール'
        ],
        [
            'id' => 3,
            'content' => 'POSSE課題'
        ]
        ]); 
    }
}
