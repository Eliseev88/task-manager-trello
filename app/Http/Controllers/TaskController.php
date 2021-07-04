<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return DB::table('tasks')
            ->leftJoin(DB::raw('users as users_executors'), 'executor_id', '=', 'users_executors.id')
            ->leftJoin(DB::raw('users as users_initiators'), 'initiator_id', '=', 'users_initiators.id')
            ->join('boards', 'board_id', '=', 'boards.id')
            ->join('task_topics', 'task_topics_id', '=', 'task_topics.id')
            ->select(
                DB::raw('tasks.name as task_name'),
                DB::raw('tasks.description as task_description'),
                DB::raw('tasks.deadline as task_deadline'),
                DB::raw('tasks.period as task_period'),
                DB::raw('users_executors.name as executor_name'),
                DB::raw('users_initiators.name as initiator_name'),
                DB::raw('task_topics.name as task_topic_name'), 'tasks.created_at', 'tasks.updated_at', 'task_status'
            )->orderBy('tasks.created_at', 'DESC')
            ->get()->toJson(JSON_PRETTY_PRINT);
    }

    public function getAllUserTasks()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->only(
            'name',
            'description',
            'deadline',
            'period',
            'executor_id',
            'initiator_id',
            'board_id',
            'task_topics_id',
            'task_status'
        );
        $newTask = Task::create($fields);

        if ($newTask) {
            return $newTask;
        }
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $existingTask = DB::table('tasks')
            ->leftJoin(DB::raw('users as users_executors'), 'executor_id', '=', 'users_executors.id')
            ->leftJoin(DB::raw('users as users_initiators'), 'initiator_id', '=', 'users_initiators.id')
            ->join('boards', 'board_id', '=', 'boards.id')
            ->join('task_topics', 'task_topics_id', '=', 'task_topics.id')
            ->select(
                DB::raw('tasks.name as task_name'),
                DB::raw('tasks.description as task_description'),
                DB::raw('tasks.deadline as task_deadline'),
                DB::raw('tasks.period as task_period'),
                DB::raw('users_executors.name as executor_name'),
                DB::raw('users_initiators.name as initiator_name'),
                DB::raw('task_topics.name as task_topic_name'), 'tasks.created_at', 'tasks.updated_at', 'task_status'
            )
            ->where('tasks.id', '=', $id)
            ->orderBy('tasks.created_at', 'DESC')
            ->get();
        if ($existingTask) {
            return $existingTask;
        }
        return 'Задача не найдена';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingTask = Task::find($id);

        if ($existingTask) {
            $fields = $request->only(
                'name',
                'description',
                'deadline',
                'period',
                'executor_id',
                'initiator_id',
                'board_id',
                'task_topics_id',
                'task_status'
            );
            $fields['updated_at'] = Carbon::now();
            $existingTask->fill($fields)->save();

            return $existingTask;
        }
        return 'Задача не найдена';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingTask = Task::find($id);

        if ($existingTask) {
            $existingTask->delete();

            return 'Задача удалена';
        }
        return "Задача не найдена";
    }
}
