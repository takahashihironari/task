<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

[
    'name' => '田中太郎',
'email' => 'abc@abc',
'password' => 'aaaaaaa',
'created_at' => now(),
'updated_at' => now()
        ],

[
    'name' => '高橋俊成',
'email' => 'bbb@bbb',
'password' => 'bbbbb',
'created_at' => now(),
'updated_at' => now()
    ],

[
    'name' => '北川悠仁',
'email' => 'cds@fgd',
'password' => 'cfewqf',
'created_at' => now(),
'updated_at' => now()
    ],

[
    'name' => '岩沢厚治',
'email' => 'dsd@dfd',
'password' => 'dfewqd',
'created_at' => now(),
 'updated_at' => now()
]


]);
    }
}
