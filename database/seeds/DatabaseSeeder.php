<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminTableSeeder::class);
         $this->call(ConfigTableSeeder::class);
         $this->call(StaffTableSeeder::class);
         $this->call(StatisticTableSeeder::class);
         $this->call(TimesheetTableSeeder::class);
    }
}
