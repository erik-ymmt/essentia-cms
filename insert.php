<?php

include __DIR__.'/src/entity/Customer.php';

use \src\entity\Customer;

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(isset($_POST['inputName'])) {
  $newCustomer = new Customer;
  $newCustomer->name     = $_POST['inputName'];
  $newCustomer->email    = $_POST['inputEmail'];
  $newCustomer->phone    = $_POST['inputPhone'];
  $newCustomer->company  = $_POST['inputCompany'];
  $newCustomer->image    = $_POST['inputImg'];
  $newCustomer->insert();

  header("Location: list.php");
  exit;
}

include __DIR__.'/src/view/header.php';
include __DIR__.'/src/view/form.php';
include __DIR__.'/src/view/footer.php';