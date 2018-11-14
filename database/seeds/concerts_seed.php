<?php

use Illuminate\Database\Seeder;

class concerts_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concerts')->insert([
            [
                "name" => "JuL",
                "salle_id" => 1,
                "lieu_id" => 1,
                "dispo" => 1,
            ],
        ]);
    }
}
