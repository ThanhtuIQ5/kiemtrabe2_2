<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,      // Đảm bảo RoleSeeder được gọi ở đây
            UserRoleSeeder::class,  // Đảm bảo UserRoleSeeder được gọi ở đây
            UserSeeder::class,      // Đảm bảo UserSeeder được gọi ở đây
        ]);
    }
}
