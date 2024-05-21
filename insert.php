<?php

include __DIR__.'/src/entity/Customer.php';

use \src\entity\Customer;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // echo "<pre>";
  // print_r($_POST);
  // echo "</pre>";
  if (isset($_FILES["inputImg"]) && $_FILES["inputImg"]["error"] == 0) {
      $targetDirectory = "public/imgs/";
      $targetFile = $targetDirectory . basename($_FILES["inputImg"]["name"]);

      if (move_uploaded_file($_FILES["inputImg"]["tmp_name"], $targetFile)) {
          echo "The file ". basename( $_FILES["inputImg"]["name"]). " has been uploaded.";
      } else {
          echo "There was an error uploading your file, please try again later.";
      }
  }
}

if(isset($_POST['inputName'])) {
  $newCustomer = new Customer;
  $newCustomer->name     = $_POST['inputName'];
  $newCustomer->email    = $_POST['inputEmail'];
  $newCustomer->phone    = $_POST['inputPhone'];
  $newCustomer->company  = $_POST['inputCompany'];
  $newCustomer->image    = $_FILES['inputImg']['name'];
  $newCustomer->insert();


  header("Location: list.php");
  exit;
}

include __DIR__.'/src/view/header.php';
include __DIR__.'/src/view/form.php';
include __DIR__.'/src/view/footer.php';