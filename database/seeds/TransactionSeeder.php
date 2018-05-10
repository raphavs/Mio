<?php

use Illuminate\Database\Seeder;

/* CREATE SEEDER: php artisan make:seeder <name_of_seeder> */
/* RUN DATABASE SEEDER: php artisan db:seed */
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into transaction values(1, 'Gianmarco', STR_TO_DATE('2018-03-23','%Y-%m-%d'), STR_TO_DATE('12:39:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into transaction values(2, 'Rapha', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('20:05:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(3, 'Gianmarco', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('21:11:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(4, 'Patrick', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('15:53:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(5, 'Gianmarco', STR_TO_DATE('2018-03-22','%Y-%m-%d'), STR_TO_DATE('13:44:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(6, 'Rapha', STR_TO_DATE('2018-03-21','%Y-%m-%d'), STR_TO_DATE('19:48:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(7, 'Gianmarco', STR_TO_DATE('2018-03-20','%Y-%m-%d'), STR_TO_DATE('12:39:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into transaction values(8, 'Rapha', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('20:05:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(9, 'Gianmarco', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('21:11:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(10, 'Patrick', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('15:53:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(11, 'Gianmarco', STR_TO_DATE('2018-03-19','%Y-%m-%d'), STR_TO_DATE('13:44:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(12, 'Rapha', STR_TO_DATE('2018-03-18','%Y-%m-%d'), STR_TO_DATE('19:48:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(13, 'Gianmarco', STR_TO_DATE('2018-03-17','%Y-%m-%d'), STR_TO_DATE('12:39:00','%H:%i:%s') /*, NOW(), NOW() */)");
        DB::insert("insert into transaction values(14, 'Rapha', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('20:05:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(15, 'Gianmarco', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('21:11:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(16, 'Patrick', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('15:53:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(17, 'Gianmarco', STR_TO_DATE('2018-03-16','%Y-%m-%d'), STR_TO_DATE('13:44:00','%H:%i:%s'))");
        DB::insert("insert into transaction values(18, 'Rapha', STR_TO_DATE('2018-03-15','%Y-%m-%d'), STR_TO_DATE('19:48:00','%H:%i:%s'))");
    }

}
