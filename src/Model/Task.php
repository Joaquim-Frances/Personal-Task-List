<?php

class Task{

    public  $id;
    public  $taskName;
    public  $dateCreation;


    public function __construct($id = null, $taskName = "", $dateCreation = null){

        $this->id = $id;
        $this->name = $name;
        $this->dateCreation = $dateCreation;

        if(!$this->database){
            $this->database = new database;
        }
    }

}
?>











