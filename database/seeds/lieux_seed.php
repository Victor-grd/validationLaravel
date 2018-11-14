<?php

use Illuminate\Database\Seeder;

class lieux_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lieus')->insert([
            [
                "name" => "Lyon",
            ],
            [
                "name" => "Paris",
            ],
            [
                "name" => "Hyrule",
            ],
        ]);
    }
}
