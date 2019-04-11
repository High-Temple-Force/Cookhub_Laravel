<?php

use Illuminate\Database\Seeder;

class Commentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comment = new \App\Comment([
            'body' => 'This is comment!!!!',
        ]);
    }
}
