<?php

use App\Database;


class Task{

    public  $id;
    public  $taskName;
    public  $dateCreation;
    public  $descripcio;

    public function __construct($id = null, $taskName = "", $dateCreation = null, $descripcio =""){

        $this->id = $id;
        $this->name = $name;
        $this->dateCreation = $dateCreation;
        $this->descripcio = $descripcio;

        if(!$this->database){
            $this->database = new database;
        }
    }

    public function listTasks(){

        $allTasks = $this->database->mysql->query("SELECT * FROM tasques");
        $taskList = [];
        foreach ( $allTasks as $task){
            $fullTask = new Task ($task["id"], $task["name"], $task["fecha"], $task["descripcio"]);
            array_push($taskList, $fullTask);
        }

        return $taskList;
    }

}
?>











