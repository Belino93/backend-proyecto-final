<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeders::class);
        $this->call(StateSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RepairSeeders::class);
        $this->call(DeviceSeeders::class);
        $this->call(Device_Repair_Seeder::class);
    }
}
