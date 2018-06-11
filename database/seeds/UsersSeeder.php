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
        DB::insert("insert into users values( 1, 'Rapha', 'raphael.vosseler@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 2, 'Gianmarco', 'gianmarco.giretti@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 3, 'Bruder', 'patrick.vosseler@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 4, 'Mom', 'sabine.vosseler@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 5, 'Dad', 'juergen.vosseler@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 6, 'Pheline', 'pheline.soppke@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 7, 'Mom Giretti', 'mom.giretti@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 8, 'Dad Giretti', 'dad.giretti@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values( 9, 'Schwester', 'schwester.giretti@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(10, 'Sedrik', 'sedrik.cirzel@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(11, 'Dominik', 'dominik.burkert@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(12, 'Lea', 'lea.scholtes@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(13, 'Mom Scholtes', 'mom.scholtes@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(14, 'Dad Scholtes', 'dad.scholtes@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(15, 'Schwester', 'schwester.scholtes@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
        DB::insert("insert into users values(16, 'Freund', 'freund.scholtes@htwg-konstanz.de', '$2y$10\$ISsDZFjonb7Ha34E/UtuXeeK5wwCswhM1r3q7zWWNmqX.yU8EnGKK', NULL, NOW(), NOW())");
    }
}
