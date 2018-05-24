<?php

use Illuminate\Database\Seeder;

/* CREATE SEEDER: php artisan make:seeder <name_of_seeder> */
/* composer dump-autoload */
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
        DB::insert("insert into transactions values(1, 'Gianmarco', STR_TO_DATE('2018-03-23','%Y-%m-%d'), STR_TO_DATE('12:39:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into transactions values(2, 'Rapha', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('20:05:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(3, 'Mom', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('21:11:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(4, 'Bruder', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('15:53:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(5, 'Dad', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('13:44:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(6, 'Ebrar', STR_TO_DATE('2018-03-21','%Y-%m-%d'), STR_TO_DATE('19:48:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(7, 'Pheline', STR_TO_DATE('2018-03-20','%Y-%m-%d'), STR_TO_DATE('12:39:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into transactions values(8, 'Robin', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('20:05:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(9, 'Mom', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('21:11:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(10, 'Lea', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('15:53:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(11, 'Gianmarco', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('13:44:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(12, 'Dad', STR_TO_DATE('2018-03-18','%Y-%m-%d'), STR_TO_DATE('19:48:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(13, 'Leas Mom', STR_TO_DATE('2018-03-17','%Y-%m-%d'), STR_TO_DATE('12:39:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into transactions values(14, 'Rapha', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('20:05:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(15, 'Leas Dad', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('21:11:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(16, 'Bruder', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('15:53:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(17, 'Ebrar', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('13:44:00','%H:%i:%s'))");
        DB::insert("insert into transactions values(18, 'Pheline', STR_TO_DATE('2018-03-15','%Y-%m-%d'), STR_TO_DATE('19:48:00','%H:%i:%s'))");
    }

}
