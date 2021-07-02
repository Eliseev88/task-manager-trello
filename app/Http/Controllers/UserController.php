<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::orderBy('name')->get();
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

        $fields['name'] = $request->input('name');
        $fields['email'] = $request->input('email');
        $fields['password'] = Hash::make($request->input('password'));
        if($request->input('remember_token')) {
            $fields['remember_token'] = Str::random(100);
        }
        $fields['phone'] = $request->input('phone');
        $newUser = User::create($fields);

        if ($newUser) {
            return $newUser;
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
        $existingUser = User::find($id);

        if ($existingUser) {
            return $existingUser;
        }
        return 'Пользватель не найдена';
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
        $existingUser = User::find($id);

        if ($existingUser) {
            $fields['name'] = $request->input('name');
            $fields['email'] = $request->input('email');
            $fields['password'] = Hash::make($request->input('password'));
            $fields['updated_at'] = Carbon::now();
            $existingUser->fill($fields)->save();

            return $existingUser;
        }
        return "Пользователь не найден не найдена";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingUser = User::find($id);

        if ($existingUser) {
            $existingUser->delete();

            return 'Учетная запись пользователя удалена';
        }
        return "Пользователь не найден";
    }
}
