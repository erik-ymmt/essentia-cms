<?php

include __DIR__.'/src/entity/Customer.php';

use \src\entity\Customer;

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

if(isset($_POST['inputName'])) {
  $customer = new Customer;
  $customer->name     = $_POST['inputName'];
  $customer->email    = $_POST['inputEmail'];
  $customer->phone    = $_POST['inputPhone'];
  $customer->company  = $_POST['inputCompany'];
  $customer->image    = $_POST['inputImg'];
  $customer->insert();

  include __DIR__.'/src/view/header.php';
  include __DIR__.'/src/view/customersList.php';
  include __DIR__.'/src/view/footer.php';
  exit;
}

include __DIR__.'/src/view/header.php';
include __DIR__.'/src/view/form.php';
include __DIR__.'/src/view/footer.php';