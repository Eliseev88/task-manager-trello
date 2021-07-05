<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;

class EBoardController extends Controller
{


    /**
     * @param int $id
     * @return void
     */
    public function getUserGroups(int $id)
    {
        $userGroups = User::findOrFail($id);

         foreach ($userGroups->groups as $key=>$group) {
              $userBoards[$key] = Board::where('group_id', ($group->pivot->group_id))
              ->get()->toArray();

        }
//        dd($userBoards);
        return view('tasks', ['userBoards' => $userBoards]);
    }



}
