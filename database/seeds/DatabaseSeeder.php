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


        $users = 
        [
            ["id"=>1, "fullname"=>"Admin", "teamname"=>"Admin", "username"=>"admin", "email"=>"admin@email.com", "password"=>"$2y$10\$oXzrsnaXh3ovVdrIB2OAz.eYu/ToqjPDNw1hY2rUOdT2kVepyJ1qO", "ismarketing"=>0, "isadmin"=>1, "ispaid"=>0],
            ["id"=>2, "fullname"=>"John Michael", "teamname"=>"mancity", "username"=>"mancity", "email"=>"john@email.com", "password"=>"$2y$10$8Uar5e7RSi5SdwgI9b9cS.ycQ0/gc96yQPNvT3rWJNxRFUkCfDf4i", "ismarketing"=>0, "isadmin"=>0, "ispaid"=>1],
        ];

        DB::table('users')->insert($users);

    }
}
