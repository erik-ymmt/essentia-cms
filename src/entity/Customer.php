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
  public $date;

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
    $customersList = $dataBase->read()->fetchAll(PDO::FETCH_CLASS, self::class);
    echo "<pre>";
    var_dump($customersList);
    echo "</pre>";
    return $customersList;
  }

  public function update(){

  }

  public function delete(){

  }

}