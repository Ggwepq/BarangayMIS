<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'officerId' => '1',
            'email' => 'admin@gmail.com',
            'userRole' => '1',
            'password' => bcrypt('admin'),
            'isActive' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'officerId' => '2',
            'email' => 'juan@gmail.com',
            'userRole' => '2',
            'password' => bcrypt('juan'),
            'isActive' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
