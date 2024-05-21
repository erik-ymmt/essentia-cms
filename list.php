<?php

include __DIR__.'/src/entity/Customer.php';

use \src\entity\Customer;

$customers = Customer::read()

include __DIR__.'/src/view/header.php';
include __DIR__.'/src/view/customersList.php';
include __DIR__.'/src/view/footer.php';