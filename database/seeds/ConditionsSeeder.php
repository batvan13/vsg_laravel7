<?php

use Illuminate\Database\Seeder;
use App\Conditions;

class ConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conditions::create(['description'=>'Редактирайте текста за вас']);
    }
}
