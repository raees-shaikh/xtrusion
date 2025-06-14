<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CmsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cms_users')->insert([
            [
                "name" => 'Admin',
                "email" => 'admin@test.com',
                "password" => bcrypt('password'),
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
    }
}
