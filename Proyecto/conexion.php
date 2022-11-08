<?php
namespace Model;
require_once 'Usuario.php';

class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'root', '', 'mvc');
    }
    
    public function close() {
        $this->con->close();
    }
    
    public function con(){
        return $this->con;
    }
}
