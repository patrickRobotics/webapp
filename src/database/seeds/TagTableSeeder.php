<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = \App\Tag();
        $tag->name = 'Tutorial';
        $tag->save();

        $tag = \App\Tag();
        $tag->name = 'Industrial News';
        $tag->save();
    }
}
