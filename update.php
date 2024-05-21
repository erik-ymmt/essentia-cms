<?php

include __DIR__.'/src/entity/Customer.php';

use \src\entity\Customer;

$customerToUpdate = new Customer;
$fieldMappings = [
  'inputName'   => 'name',
  'inputEmail'  => 'email',
  'inputPhone'  => 'phone',
  'inputCompany'=> 'company',
  'inputImg'    => 'image'
];

$update = false;
foreach ($fieldMappings as $field => $property) {
  if (isset($_POST[$field])) {
      $customerToUpdate->$property = $_POST[$field];
      $update = true;
  }
}

if ($update) {
  $customerToUpdate->update($_GET['id']);
  header("Location: list.php");
  exit;
}

$originalCustomer = Customer::readById($_GET['id'])[0];
$originalName = $originalCustomer->name;
$originalEmail = $originalCustomer->email;
$originalPhone = $originalCustomer->phone;
$originalCompany = $originalCustomer->company;
$originalImage = $originalCustomer->image;

include __DIR__.'/src/view/header.php';
include __DIR__.'/src/view/form.php';
include __DIR__.'/src/view/footer.php';