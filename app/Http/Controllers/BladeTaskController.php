<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BladeTaskController extends Controller
{
    public function index()
    {
        $array = [];
        $sortTask = [];
        $tasks = $this->allUserTask();
        $topics = $this->tasksTopic();
        foreach ($topics as $topic => $item) {
            if (!in_array($item->task_topic, $array)) {
                $array[] = $item->task_topic;
            }
        }
        foreach ($tasks as $task => $taskItem){
            for($i = 0; $i < count($tasks)-1; $i++){
                    if($array[$i] == $taskItem->task_topic){
                        $sortTask[$array[$i]][] = $taskItem;
                    }
                }
            }
       return view('layout.tasks', ['tasks' => $sortTask]);;

    }

    public function tasksTopic()
    {
        $user = Auth::user()->id;

        $topic = DB::table('tasks')
                ->leftJoin('task_topics', 'tasks.task_topics_id', '=', 'task_topics.id')
                ->where('executor_id', $user)
                ->orWhere('initiator_id', $user)
                ->get([
                    'task_topics.name as task_topic'
                ]);

        return $topic;
    }

    public function allUserTask()
    {
        $user = Auth::user()->id;

        $tasks = DB::table('tasks')
            ->leftJoin('task_topics', 'tasks.task_topics_id', '=', 'task_topics.id')
            ->leftJoin('users as ti', 'tasks.initiator_id', '=', 'ti.id')
            ->leftJoin('users as te', 'tasks.executor_id', '=', 'te.id')
            ->leftJoin('boards', 'tasks.board_id', '=', 'boards.id')
            ->leftJoin('groups', 'boards.group_id', '=', 'groups.id')
            ->where('executor_id', $user)
            ->orWhere('initiator_id', $user)
            ->orderBy('tasks.created_at', 'DESC')
            ->get(['tasks.*',
                'task_topics.name as task_topic',
                'ti.name as name_initiator',
                'te.name as name_executor',
                'boards.name as board_name',
                'groups.name as group_name']);

        return($tasks);
    }

}
