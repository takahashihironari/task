<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     DB::table('posts')->insert([

[
'user_name' => '田中太郎',
'contents' => 'aaaaaaa',
'created_at' => now(),
'updated_at' => now()
],


[
'user_name' => '田中太郎',
'contents' => 'assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssaa',
'created_at' => now(),
'updated_at' => now()
        ]










]);


    }


    }
