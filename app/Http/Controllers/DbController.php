<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index()
    {
        // проверка отношений "одного ко многим" и обратного

        //1 - возвращаю все таски, где используется первый статус из таблицы статусов
        $st = Status::query()->first();
        $tasks = $st->tasks;
        echo json_encode($tasks);

        //2-возвращаю все статусы для первого таска - но он будет один!

        $task = Task::query()->first();
        $status = $task->status;

        echo "<br><br>".json_encode($status);
    }
}
