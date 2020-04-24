<?php

use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            
            'description' => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
            'bureau' => "Main Office", 
            'adresse' => "C/ Libertad, 34",
            'villecode' => "05200 Arévalo",
            'tel' => "0034 37483 2445 322",
            'mail' => "hello@company.com",
        ]);
    }
}
