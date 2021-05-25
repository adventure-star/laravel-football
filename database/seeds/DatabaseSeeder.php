<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Time;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $players = 
        [
            ["id"=>1, "round"=>1, "position"=>"G", "name"=>"Manuel Neuer", "team"=>"Finland", "value"=> 2],
            ["id"=>2, "round"=>1, "position"=>"G", "name"=>"Edouard Mendy", "team"=>"Italy", "value"=> 1],
            ["id"=>3, "round"=>2, "position"=>"G", "name"=>"Roman Bürki", "team"=>"Denmark", "value"=> 4],
            ["id"=>4, "round"=>1, "position"=>"G", "name"=>"Alisson Becker", "team"=>"Wales", "value"=> 10],
            ["id"=>5, "round"=>2, "position"=>"G", "name"=>"Ederson Moraes", "team"=>"Belgium", "value"=> 15],
            ["id"=>6, "round"=>1, "position"=>"D1", "name"=>"Agustin Marchesin", "team"=>"Italy", "value"=> 3],
            ["id"=>7, "round"=>1, "position"=>"D1", "name"=>"Niklas Süle", "team"=>"Switzerland", "value"=> 4],
            ["id"=>8, "round"=>2, "position"=>"D1", "name"=>"Alphonso Davies", "team"=>"Russia", "value"=> 5],
            ["id"=>9, "round"=>1, "position"=>"D1", "name"=>"Raphael Guerreiro", "team"=>"Poland", "value"=> 7],
            ["id"=>10, "round"=>2, "position"=>"D2", "name"=>"Cesar Azpilicueta", "team"=>"Spain", "value"=> 4],
            ["id"=>11, "round"=>1, "position"=>"D2", "name"=>"Wilson Manafa", "team"=>"England", "value"=> 5],
            ["id"=>12, "round"=>2, "position"=>"D2", "name"=>"Manuel Neuer", "team"=>"Turkey", "value"=> 5],
        ];

        $questions = 
        [
            ["id"=>1, "round"=>1, "number"=>1, "text"=>"Which country will score most goals?"],
            ["id"=>2, "round"=>1, "number"=>2, "text"=>"Which country?"],
            ["id"=>3, "round"=>1, "number"=>3, "text"=>"Player?"],
            ["id"=>4, "round"=>1, "number"=>4, "text"=>"Goals"],
            ["id"=>5, "round"=>1, "number"=>5, "text"=>"Cards?"],
        ];

        $qinputs = 
        [
            ["id"=>1, "qid"=>1, "input"=>"Austria"],
            ["id"=>2, "qid"=>1, "input"=>"Belgium"],
            ["id"=>3, "qid"=>1, "input"=>"Denmark"],
            ["id"=>4, "qid"=>1, "input"=>"Finland"],
        ];

        $fixtures = 
        [
            ["id"=>1, "round"=>1, "group"=>"A", "teama"=>"Turkey", "teamb"=>"Italy", "date" =>"11-Jun", "cet"=>"21:00"],
            ["id"=>2, "round"=>1, "group"=>"A", "teama"=>"Wales", "teamb"=>"Switzerland", "date" =>"12-Jun", "cet"=>"15:00"],
            ["id"=>3, "round"=>1, "group"=>"B", "teama"=>"Denmark", "teamb"=>"Finland", "date" =>"12-Jun", "cet"=>"18:00"],
            ["id"=>4, "round"=>2, "group"=>"D", "teama"=>"Belgium", "teamb"=>"Russia", "date" =>"12-Jun", "cet"=>"21:00"],
            ["id"=>5, "round"=>2, "group"=>"C", "teama"=>"England", "teamb"=>"Croatia", "date" =>"13-Jun", "cet"=>"15:00"],
        ];

        DB::table('players')->insert($players);
        DB::table('questions')->insert($questions);
        DB::table('qinputs')->insert($qinputs);
        DB::table('fixtures')->insert($fixtures);

    }
}
