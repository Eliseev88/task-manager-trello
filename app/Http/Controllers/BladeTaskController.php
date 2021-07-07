<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BladeTaskController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $array = [];
        $sortTask = [];
        $tasks = $this->allUserTask();
        $topics = $this->tasksTopic();
        foreach ($topics as $topic => $item) {
            if (!in_array($item->task_topic, $array)) {
                $array[] = $item->task_topic;
            }
        }
        foreach ($tasks as $key =>  $taskItem){
            foreach ($array as $arr_key => $item){
                if($array[$arr_key] == $taskItem->task_topic){
                    $sortTask[$array[$arr_key]][] = $taskItem;
                }
            }
        }

        return view('layout.tasks', ['tasks' => $sortTask, 'user' => $user]);

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

    public function create(Request $request)
    {
        //dd($request);
        $task = Task::create([
            'task_topics_id' => $request->task_topics_id,
            'name' => $request->name,
            'description' => $request->description,
            'executor_id' => $request->executor_id,
            'initiator_id' => $request->initiator_id,
            'board_id' => $request->board_id,
        ]);

        $task->save();
        return redirect()->route('tasks::index');
    }

}
