<?php

use Illuminate\Database\Seeder;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $post_test = new \App\Post([
                'title' => '投稿のタイトル',
                'body' => '本文です。デザインデザインデザイン'
            ]);
            $post_test->save();
    }
}
