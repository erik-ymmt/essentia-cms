<?php
  $cards = '';
  foreach($customers as $customer){
    $cards .= '<div>
                <div>'.$customer->id.'</div>
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
<main>
  <?=$cards?>
</main>