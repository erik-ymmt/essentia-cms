<?php
  $cards = '';
  foreach($customers as $customer){
    $cards .= '<div class="m-5">
                <img alt="image'.$customer->id.'" src="'.$customer->image.'"
                <div>ID: '.$customer->id.'</div>
                <div>Name: '.$customer->name.'</div>
                <div>Email: '.$customer->email.'</div>
                <div>Phone: '.$customer->phone.'</div>
                <div>Company: '.$customer->company.'</div>
                <div>Date: '.$customer->date.'</div>
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
<main style="max-width: 40%">
  <?=$cards?>
</main>