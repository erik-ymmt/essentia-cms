<?php

namespace src\db;

use \PDO;

class Connection{

  const HOST = 'localhost';
  const DB_NAME = 'ecms';
  const USER = 'root';
  const PASSWORD = '';

  private $table;
  private $connection;

  public function __construct($table = null){
    $this->table = $table;
    $this->connectDb();
  }

  private function connectDb(){
    try{
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DB_NAME,self::USER,self::PASSWORD);
    }catch(PDOException $e){
      die('Set Connection Error: '.$e->getMessage());
    }
  }

  public function insert($values){
    $fields = array_keys($values);
    $binds  = array_pad([],count($fields),'?');

    $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
    $sth = $this->connection->prepare($query);
    $sth ->execute(array_values($values));
    return $this->connection->lastInsertId();
  }

  public function read(){
    $query = 'SELECT * FROM '.$this->table;
    $sth = $this->connection->prepare($query);
    $sth ->execute();
    return $sth;
  }

  public function readById($id){
    $query = 'SELECT * FROM '.$this->table.' WHERE id = '.$id;;
    $sth = $this->connection->prepare($query);
    $sth ->execute();
    return $sth;
  }

  public function update($id, $values){
    $fields = array_keys($values);
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE id = '.$id;
    $sth = $this->connection->prepare($query);
    $sth ->execute(array_values($values));
  }

  public function delete($id){
    $query = 'DELETE FROM '.$this->table.' WHERE id = '.$id;
    $sth = $this->connection->prepare($query);
    $sth ->execute();
  }

}