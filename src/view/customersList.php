<?php
  $cards = '';
  foreach($customers as $customer){
    $imageSrc = isset($customer->image) && $customer->image != '' ? "public/imgs/".$customer->image : "public/essentiaIcon.png";
    $cards .= '<div class="customer-card">
                <img class="customer-icon" alt="customer image'.$customer->id.'" src="'.$imageSrc.'"/>
                <div>ID: '.$customer->id.'</div>
                <div>Name: '.$customer->name.'</div>
                <div>Email: '.$customer->email.'</div>
                <div>Phone: '.$customer->phone.'</div>
                <div>Company: '.$customer->company.'</div>
                <div>
                  <a href="update.php?id='.$customer->id.'">
                    <button type="button" class="btn btn-primary">Editar</button>
                  </a>
                  <a href="delete.php?id='.$customer->id.'">
                    <button type="button" class="btn btn-danger">Excluir</button>
                  </a>
                </div>
              </div>';
  }

  $cards = strlen($cards) ? $cards : '<p>Empty List</p>' 

?>
<main class="customers-container">
  <?=$cards?>
</main>