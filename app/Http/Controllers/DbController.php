<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users ');
       var_dump($users);
    }
}
