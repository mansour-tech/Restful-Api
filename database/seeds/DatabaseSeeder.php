<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class); // لازم يكون اول واحد علشان الربط وتحقق كل علاقة مع طل واحد اما الباقي مش شرط ترتيبهم
        $this->call(LessonSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LessonTagSeeder::class);
    }
}
