<?php

use App\Model\Task;
use App\Views\View;


class taskerController{

    public function __construct(){

        $this-index();
    }


    public function index(){

        $task = new Task;
        $tasks = $task->listTasks();

        new View ("TaskerList", ["tasks"=>$tasks]);


    }
    



}

?>