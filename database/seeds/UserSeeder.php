<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'a@a.ru',
                'password' => bcrypt(12345678),
            ]
        ];
        DB::table('users')->insert($data);
    }
}
