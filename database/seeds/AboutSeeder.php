<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create(['description'=>'Редактирайте текста за вас']);
    }
}
