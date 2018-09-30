<table class="card-panel hoverable collapsible " data-toggle="table">
   <thead>
      <tr>
        <th class="center-align" data-field="id" data-sortable="true">ID</th>
        <th data-field="name" data-sortable="true">Nome</th>
        <th class="left-align" data-field="area" data-sortable="true">Área</th>
        <th class="center-align" data-field="sold" data-sortable="true">Salário</th>
       </tr>
   </thead>
   <tbody  id="Tablela_de_funcionarios">
     
    <?php 
    $totalSalario = 0;
    foreach($list_func as $list_item):
        $id = $list_item->id.PHP_EOL;
        $nome = $list_item->nome.PHP_EOL;
        $sobrenome = $list_item->sobrenome.PHP_EOL;

          foreach($list_area as $list_ar){
            if($list_item->area.PHP_EOL ===  $list_ar->codigo.PHP_EOL){
              $area = $list_ar->nome.PHP_EOL;
            } 
          };
        $salario = $list_item->salario.PHP_EOL;
        $totalSalario = $totalSalario + $list_item->salario.PHP_EOL;
      ?>
    <tr>
      <td class="center-align"><span><?=$id?></span></td>
      <td><span><?=$nome?><?=$sobrenome?></span> </td>
      <td class="left-align"><?=$area?></td>
      <td class="center-align salario"><small>R$</small>  <?=number_format((float)$salario, 2, ',', '.')?></td>
    </tr>  
      <?php endforeach; ?>
   
    </tbody>
 </table>
 <table>

   <tbody>
   <tr class="indigo lighten-1 total">
      <td colspan="14" class="left-align "><span>Total de proventos</span></td>
      <td  colspan="1" class="center-align "><small>R$</small><?=number_format((float)$totalSalario, 2, ',', '.')?></td>
    </tr>
   </tbody>
 </table>
 </div>