<?php
/**
 * Created by IntelliJ IDEA.
 * User: nao
 * Date: 2020/11/02
 * Time: 19:12
 */

namespace App\UseCase;


use App\Repository\TaskRepository;

class TaskListUseCase
{
    public function execute()
    {
        $repository = new TaskRepository();
        return $repository->fetch_tasks();
    }

}
