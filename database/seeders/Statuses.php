<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Statuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $table = 'statuses';
        $field = 'name';

        DB::table($table)->insert([$field => 'to do']);
        DB::table($table)->insert([$field => 'in progress']);
        DB::table($table)->insert([$field => 'done']);
    }
}
