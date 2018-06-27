<?php

use Illuminate\Database\Seeder;

/* CREATE SEEDER: php artisan make:seeder <name_of_seeder> */
/* composer dump-autoload */
/* RUN SEEDER: php artisan db:seed --class=<name_of_seeder> */
/* RUN DATABASE SEEDER: php artisan db:seed */
class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into transactions values( 1, 'Marco',  '2018-03-23', '12:39:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values( 2, 'Rapha',      '2018-03-22', '20:05:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values( 3, 'Sabine',        '2018-03-22', '21:11:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values( 4, 'Patrick',     '2018-03-22', '15:53:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values( 5, 'Jürgen',        '2018-03-22', '13:44:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values( 6, 'Dominik',      '2018-03-21', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values( 7, 'Pheline',    '2018-03-20', '12:39:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values( 8, 'Daniela',      '2018-03-19', '20:05:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values( 9, 'Sabine',        '2018-03-19', '21:11:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values(10, 'Lea',        '2018-03-19', '15:53:00', 7, NOW(), NOW())");
        DB::insert("insert into transactions values(11, 'Marco',  '2018-03-19', '13:44:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values(12, 'Jürgen',        '2018-03-18', '19:48:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values(13, 'Mira',   '2018-03-17', '12:39:00', 7, NOW(), NOW())");
        DB::insert("insert into transactions values(14, 'Rapha',      '2018-03-16', '20:05:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values(15, 'Thomas',   '2018-03-16', '21:11:00', 7, NOW(), NOW())");
        DB::insert("insert into transactions values(16, 'Patrick',     '2018-03-16', '15:53:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values(17, 'Sebastian',      '2018-03-16', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(18, 'Pheline',    '2018-03-15', '19:48:00', 2, NOW(), NOW())");
        DB::insert("insert into transactions values(19, 'Sebastian',      '2018-03-15', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(20, 'Dominik',    '2018-03-15', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(21, 'Sebastian',      '2018-03-12', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(22, 'Rapha',    '2018-03-11', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(23, 'Sebastian',      '2018-03-10', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(24, 'Dominik',    '2018-03-09', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(25, 'Marco',      '2018-03-05', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(26, 'Dominik',    '2018-03-04', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(27, 'Sebastian',      '2018-03-04', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(28, 'Rapha',    '2018-03-02', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(29, 'Rapha',      '2018-03-01', '13:44:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(30, 'Dominik',    '2018-02-28', '19:48:00', 6, NOW(), NOW())");
        DB::insert("insert into transactions values(31, 'Daniela',      '2018-03-18', '18:05:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(32, 'Gianfranco',      '2018-03-17', '20:25:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(33, 'Nadine',      '2018-03-16', '13:45:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(34, 'Daniela',      '2018-03-15', '17:15:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(35, 'Gianfranco',      '2018-03-14', '20:05:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(36, 'Marco',      '2018-03-13', '10:20:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(37, 'Daniela',      '2018-03-12', '22:55:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(38, 'Marco',      '2018-03-11', '17:15:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(39, 'Gianfranco',      '2018-03-10', '20:05:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(40, 'Marco',      '2018-03-09', '10:20:00', 5, NOW(), NOW())");
        DB::insert("insert into transactions values(41, 'Daniela',      '2018-03-08', '22:55:00', 5, NOW(), NOW())");
    }

}