<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = ['低糖質', '高カロリー', '高タンパク', '100円以下'];
        foreach($tags as $tag) \App\Tag::create(['tagname' => $tag]);

    }
}
