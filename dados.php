
        <?php
          foreach($list_area as $list_ar):
            $area = $list_ar->nome.PHP_EOL;
            $jsonData = file_get_contents("funcionarios.json");
            $data = json_decode($jsonData,true);
            $sm = 0;
            $ud = 0;
            $sd = 0;
            $total = 0;
            $smSold = 0;
            $udSold = 0;
            $sdSold = 0;
            $totalSold = 0;
            foreach ($data["funcionarios"] as $value) {
                if($value["area"]=='SM'){
                    $sm = $sm+1;
                    $total = $total+1;
                    $smSold =  $smSold + $list_item->salario.PHP_EOL;
                }
                elseif($value["area"]=='UD'){
                    $ud = $ud+1;
                    $udSold = $udSold + $list_item->salario.PHP_EOL;
                    $total = $total+1;
                }
                elseif($value["area"]=='SD'){
                    $sd = $sd+1;
                    $sdSold =  $sdSold + $list_item->salario.PHP_EOL;
                    $total = $total+1;
                }
                $totalSold = number_format((($smSold + $sdSold + $udSold) / 3), 2);
            }  
      ?>
     <?php endforeach; ?>
     <div class="card dados hoverable">
    <ul class="collection with-header"> 
        <li class="collection-header indigo lighten-2"><h6>Áreas/Pessoas</h6></li>
        <li class="collection-item "><span class="badge grey lighten-5"><?=$sm?></span>Gerenciamento de Software</li>
        <li class="collection-item "><span class="badge grey lighten-5"><?=$sd?></span>Desenvolvimeto de Software</li>
        <li class="collection-item "><span class="badge grey lighten-5"><?=$ud?></span>Designer de UI/UX</li>
        <li class="collection-item "><span class="badge indigo lighten-3"><?=$total?></span>Total de Funcionários</li>
      </ul>
      <br>
      <ul class="collection with-header">
        <li class="collection-header indigo lighten-2"><h6>Média salarial</h6></li>
        <li class="collection-item "><span class="badge grey lighten-3"><small>R$  </small><?=number_format((float)$smSold, 2, '.', ',')?></span>Gerenciamento de Software</li>
        <li class="collection-item "><span class="badge grey lighten-3"><small>R$  </small><?=number_format((float)$sdSold, 2, '.', ',')?></span>Desenvolvimeto de Software</li>
        <li class="collection-item "><span class="badge grey lighten-3"><small>R$  </small><?=number_format((float)$udSold, 2, '.', ',')?></span>Designer de UI/UX</li>
        <li class="collection-item "><span class="badge indigo lighten-3"><small>R$  </small><?=$totalSold?></span>Média total</li>
      </ul>
</div>
            