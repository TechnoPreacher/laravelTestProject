<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Labels extends Seeder
{

    public function run()
    {
        $table = 'labels';

        DB::table($table)->insert(['name' => 'bug', 'color' => 'purple']);
        DB::table($table)->insert(['name' => 'feature', 'color' => 'green']);
        DB::table($table)->insert(['name' => 'urgent', 'color' => 'red']);
    }
}
