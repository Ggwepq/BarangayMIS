<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class HouseholdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('households')->insert([
            'id' => '1',
            'street' => '123 ',
            'brgy' => 'Sta. Cruz',
            'city' => 'Manila',
            'isActive' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inhabitants')->insert([
            'id' => '1',
            'residentId' => '1',
            'householdId' => '1',
            'isActive' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
