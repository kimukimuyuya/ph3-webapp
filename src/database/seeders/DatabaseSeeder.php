<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hour;
use App\Models\Language;
use App\Models\Content;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            HourSeeder::class,
            LanguageSeeder::class,
            ContentSeeder::class,
        ]);

        $languages = Language::all();
        $contents = Content::all();

        // Hour::factory()->count(12)->create()->each(function ($hour) use ($languages, $contents) {
        //     $hour->languages()->attach(
        //         $languages->random(rand(1, 3))->pluck('id')->toArray(),
        //         [
        //             'language_hour' => rand(1, 3),
        //         ]
        //     );
        //     $hour->contents()->attach(
        //         $contents->random(rand(1, 3))->pluck('id')->toArray(),
        //         [
        //             'content_hour' => rand(1, 2),
        //         ]
        //     );
        // });

        foreach (Hour::all() as $hour) {
            $hour->languages()->attach(
                $languages->random(rand(1, 3))->pluck('id')->toArray(),
                [
                    'language_hour' => rand(1, 3),
                ]
            );
            $hour->contents()->attach(
                $contents->random(rand(1, 3))->pluck('id')->toArray(),
                [
                    'content_hour' => rand(1, 2),
                ]
            );
        }
    }
}
