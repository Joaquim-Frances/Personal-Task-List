<?php

class View{

    public function __construct($view, $data= null){
    
        requiere_once("src/Views/$view.php");
    }

}

?>