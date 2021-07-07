<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupUserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GroupAccountController extends Controller
{
    public function index(Request $request)
    {
        $groups = DB::table('group_user')
            ->select('group_user.*', 'groups.name as group_name', 'boards.id as board_id', 'boards.name as board_name')
            ->join('groups', 'groups.id', '=', 'group_user.group_id')
            ->join('boards', 'boards.group_id', '=', 'group_user.group_id')
            ->where('user_id', '=', 1)
            ->get();


        // dd($groups);

        return view('account/group', [
            'groups' => $groups
        ]);
    }


    public function store(Request $request)
    {
        $newGroup = Group::create(["name" => $request->input('name')]);

        $newGroup->save();

        if ($newGroup) {

            return redirect()->route('group');
        }

        return false;
    }

    public function update(Request $request, $id)
    {
        $existingGroup = Group::find($id);

        if ($existingGroup) {
            $fields = $request->only('name');
            $fields['updated_at'] = Carbon::now();
            $existingGroup->fill($fields)->save();

            return redirect()->route('group');
        }

        return redirect()->route('group');
    }

    public function create()
    {
        return view('account.create');
    }

    public function edit($id)
    {
        $group = Group::find($id);

        return view('account/edit', [
            'group' => $group
        ]);
    }

    public function destroy($id): string
    {
        $existingGroup = Group::find($id);

        if ($existingGroup) {

            $existingGroup->delete();

            return redirect()->route('group');
        }

        return redirect()->route('group');
    }
}
