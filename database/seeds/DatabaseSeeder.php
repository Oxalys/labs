<?php

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
        $this->call(RoleSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(ImgHeaderSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(TestiSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PromoSeeder::class);
        $this->call(ContactSectionSeeder::class);
        $this->call(FooterSeeder::class);
    }
}
