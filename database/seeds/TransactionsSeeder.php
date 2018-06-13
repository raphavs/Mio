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
        DB::insert("insert into transactions values( 1, 'Gianmarco',  '2018-03-23', '12:39:00', 2 /*, NOW(), NOW() */)");
        DB::insert("insert into transactions values( 2, 'Rapha',      '2018-03-22', '20:05:00', 2)");
        DB::insert("insert into transactions values( 3, 'Mom',        '2018-03-22', '21:11:00', 2)");
        DB::insert("insert into transactions values( 4, 'Bruder',     '2018-03-22', '15:53:00', 2)");
        DB::insert("insert into transactions values( 5, 'Dad',        '2018-03-22', '13:44:00', 2)");
        DB::insert("insert into transactions values( 6, 'Ebrar',      '2018-03-21', '19:48:00', 2)");
        DB::insert("insert into transactions values( 7, 'Pheline',    '2018-03-20', '12:39:00', 2)");
        DB::insert("insert into transactions values( 8, 'Robin',      '2018-03-19', '20:05:00', 2)");
        DB::insert("insert into transactions values( 9, 'Mom',        '2018-03-19', '21:11:00', 2)");
        DB::insert("insert into transactions values(10, 'Lea',        '2018-03-19', '15:53:00', 7)");
        DB::insert("insert into transactions values(11, 'Gianmarco',  '2018-03-19', '13:44:00', 2)");
        DB::insert("insert into transactions values(12, 'Dad',        '2018-03-18', '19:48:00', 2)");
        DB::insert("insert into transactions values(13, 'Leas Mom',   '2018-03-17', '12:39:00', 7)");
        DB::insert("insert into transactions values(14, 'Rapha',      '2018-03-16', '20:05:00', 2)");
        DB::insert("insert into transactions values(15, 'Leas Dad',   '2018-03-16', '21:11:00', 7)");
        DB::insert("insert into transactions values(16, 'Bruder',     '2018-03-16', '15:53:00', 2)");
        DB::insert("insert into transactions values(17, 'Ebrar',      '2018-03-16', '13:44:00', 2)");
        DB::insert("insert into transactions values(18, 'Pheline',    '2018-03-15', '19:48:00', 2)");
    }

}
