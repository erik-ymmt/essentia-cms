<?php

include __DIR__.'/src/entity/Customer.php';

use \src\entity\Customer;

$customerDeleted = new Customer;
$customerDeleted->delete($_GET['id']);

header("Location: list.php");