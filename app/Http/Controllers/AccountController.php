<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __invoke(Request $request)
    {

        $userId = Auth::user()->getId();
        $allTaskExecutor = Task::where('executor_id', $userId)->get();
        $allTaskInitor = Task::where('initiator_id', $userId)->get();

        return view('account.index',[
            'allExecTask' => $allTaskExecutor,
            'allInitTask' => $allTaskInitor,
        ]);
    }
}
