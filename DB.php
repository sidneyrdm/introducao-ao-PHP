<?php

class DB{
    private $driver   = "mysql",
            $host     = "localhost",
            $user     = "root",
            $password = "",
            $db       = "miniloja2017",
            $obj;
    
    
    private function conectar(){
    try{
        $con = new PDO("{$this->driver}:host={$this->host};dbname={$this->db}", "{$this->user}", "");
        $con->exec("SET NAMES utf8");
        return $con;
    }catch(PDOException $e){
        exit();
    }
    }
    
    public function executeSQL($sql, array $params = null){
        $this->obj = $this->conectar()->prepare($sql);
        
        if($params != null){
            foreach($params as $key => $value){
                $this->obj->bindValue($key, $value);
            }
        }
        
        return $this->obj ->execute();
    }
    
    public function listData(){
        return $this->obj->fetchAll();
    }
}
