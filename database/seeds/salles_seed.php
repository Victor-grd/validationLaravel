<?php

use Illuminate\Database\Seeder;

class salles_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salles')->insert([
            [
                "name" => "salle A",
            ],
            [
                "name" => "salle B",
            ],
            [
                "name" => "salle C",
            ],
        ]);
    }
}
