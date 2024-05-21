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
    return $customersList;
  }

  public static function readById($id){
    $dataBase = new Connection('customer');
    $customerData = $dataBase->readById($id)->fetchAll(PDO::FETCH_CLASS, self::class);
    return $customerData;
  }

  public function update($id){
    $dataBase = new Connection('customer');
    $values = [];
    if ($this->name) $values['name']       = $this->name;
    if ($this->email) $values['email']     = $this->email;
    if ($this->phone) $values['phone']     = $this->phone;
    if ($this->image) $values['image']     = $this->image;
    if ($this->company) $values['company'] = $this->company;

    $newId = $dataBase->update($id, $values);
  }

  public function delete($id){
    if (!$id) exit;
    $dataBase = new Connection('customer');
    $customersList = $dataBase->delete($id);
  }

}