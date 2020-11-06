<?php

use PDO;
use PDOException;

class database{

    public $mysql;

    public function __construct(){

        try {
            $this->mysql = $this->getConnection();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

}

?>