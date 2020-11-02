<?php

namespace App\Http\Controllers;

use App\UseCase\TaskListUseCase;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $usecase = new TaskListUseCase();
        $tasks = $usecase->execute();

        return response()->json($tasks);
    }
}
