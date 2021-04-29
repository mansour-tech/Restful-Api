<?php

use Illuminate\Database\Seeder;

class LessonTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\LessonTag::class, 500)->create();//علشان انه مائة درس وعشرة وسوم قد يحتوي 10 دروس على وسم واحد ولعمل هذي الحركة لتفادي الاخطاء

    }
}
