<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return Board::with('group')
            ->orderBy('created_at', 'DESC')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
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
        $fields = $request->only('name', 'group_id');
        $newBoard = Board::create($fields);

        if ($newBoard) {
            return $newBoard;
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
        $existingBoard = Board::with('group')
            ->where(['id' => $id])
            ->get()
            ->toJson(JSON_PRETTY_PRINT);

        if ($existingBoard) {
            return $existingBoard;
        }
        return 'Доска не найдена';
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
        $existingBoard = Board::find($id);

        if ($existingBoard) {
            $fields = $request->only('name', 'group_id');
            $fields['updated_at'] = Carbon::now();
            $existingBoard->fill($fields)->save();

            return $existingBoard;
        }
        return "Доска не найдена";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingBoard = Board::find($id);

        if ($existingBoard) {
            $existingBoard->delete();

            return 'Доска удалена';
        }
        return "Доска не найдена";
    }
}
