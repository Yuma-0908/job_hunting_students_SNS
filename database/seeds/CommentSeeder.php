<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'id' => 1,
            'title' => 'スクール',
            'body' => 'Laravel勉強中!',
        ]);
    }
}
