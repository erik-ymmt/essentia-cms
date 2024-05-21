<?php

namespace src\entity;

// include __DIR__...'/src/db/Connection.php';
include __DIR__ . '/../db/Connection.php';


use \src\db\Connection;
use \PDO;

class Customer{

  public $id;
  public $name;
  public $email;
  public $phone;
  public $image;
  public $company;

  public function insert(){
    $dataBase = new Connection('customer');
    $newId = $dataBase->insert([
      'id'      => $this->id,
      'name'    => $this->name,
      'email'   => $this->email,
      'phone'   => $this->phone,
      'image'   => $this->image,
      'company' => $this->company
    ]);

    $this->id = $newId;
  }

  public static function read(){
    $dataBase = new Connection('customer');
    $customersList = $dataBase->select()->fetchAll();
    return customersList;
  }

  public function update(){

  }

  public function delete(){

  }

}