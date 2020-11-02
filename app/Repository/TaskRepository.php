<?php
/**
 * Created by IntelliJ IDEA.
 * User: nao
 * Date: 2020/11/02
 * Time: 19:12
 */

namespace App\Repository;


use App\Models\Tasks;

class TaskRepository
{
    public function fetch_tasks()
    {
        $tasks = Tasks::all();

        $result = [];
        foreach ($tasks as $task) {
            $result[] = [
                'id' => $task->id,
                'send_message' => $task->send_message,
            ];
        }

        return $result;
    }
}
