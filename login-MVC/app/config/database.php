<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $senha = '';
<<<<<<< HEAD
    private $banco = 'login';
=======
    private $banco = 'todo_list';
>>>>>>> 5a48a9264a9157fdc502d4b3cece2b074d3b6418

    public $conn = '';

    public function conectar(){
        $this->conn = new mysqli($this-> host, $this-> username, $this->senha, $this->banco);
        if($this->conn->connect_error){
            die("Algo deu errado!". $this->conn->connect_error);
        }
        return $this->conn;
    }


}



?>