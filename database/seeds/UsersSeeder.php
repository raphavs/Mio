<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into users values( 1, 'Rapha', 'rapha@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 1)");
        DB::insert("insert into users values( 2, 'Marco', 'marco@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 2)");
        DB::insert("insert into users values( 3, 'Patrick', 'patrick@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 2)");
        DB::insert("insert into users values( 4, 'Sabine', 'sabine@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values( 5, 'Jürgen', 'juergen@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 2)");
        DB::insert("insert into users values( 6, 'Pheline', 'pheline@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 2)");
        DB::insert("insert into users values( 7, 'Daniela', 'daniela@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values( 8, 'Gianfranco', 'gianfranco@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values( 9, 'Nadine', 'nadine@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values(10, 'Sebastian', 'sebastian@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values(11, 'Dominik', 'dominik@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values(12, 'Lea', 'lea@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 1)");
        DB::insert("insert into users values(13, 'Mira', 'mira@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values(14, 'Thomas', 'thomas@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 2)");
        DB::insert("insert into users values(15, 'Julia', 'julia@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values(16, 'Falco', 'falco@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 3)");
        DB::insert("insert into users values(17, 'Eiglsperger', 'prof.eiglsperger@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW(), 1)");
    }

}