<?php

namespace Database\Seeders;

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
        // استدعاء Seeder لإدخال مستخدم Admin
        $this->call(AdminSeeder::class);
    }
}
