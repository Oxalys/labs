<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => "CEO",
        ]);
        DB::table('roles')->insert([
            'role' => "Webmaster",
        ]);
        DB::table('roles')->insert([
            'role' => "User",
        ]);
        DB::table('roles')->insert([
            'role' => "Admin",
        ]);
        DB::table('roles')->insert([
            'role' => "Designer",
        ]);
    }
}
