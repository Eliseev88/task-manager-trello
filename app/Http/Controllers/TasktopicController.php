<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TaskTopic;

class TasktopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaskTopic::orderBy('created_at', 'DESC')->get();
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
        $newTaskTopic = TaskTopic::create(["name" => $request->input('name')]);

        if ($newTaskTopic) {
            return $newTaskTopic;
        }
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $existingTaskTopic = TaskTopic::find($id);

        if ($existingTaskTopic) {
            return $existingTaskTopic;
        }
        return 'Тема задачи не найдена';
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
        $existingTaskTopic = TaskTopic::find($id);

        if ($existingTaskTopic) {
            $fields = $request->only('name');
            $fields['updated_at'] = Carbon::now();
            $existingTaskTopic->fill($fields)->save();

            return $existingTaskTopic;
        }
        return "Тема задачи не найдена";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingTaskTopic = TaskTopic::find($id);

        if ($existingTaskTopic) {
            $existingTaskTopic->delete();

            return 'Тема задачи удалена';
        }
        return "Тема задачи не найдена";
    }
}
