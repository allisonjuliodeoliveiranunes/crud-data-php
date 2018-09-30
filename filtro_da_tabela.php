<div class="card hoverable data">
<div class="flex">
  <div class='dropdown'>
    <button class="btn btn-default dropdown-toggle indigo lighten-1" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Mostrar
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      <li><a href="#!" onclick="minmax(max)">Maiores salários</a></li>
      <li><a href="#!" onclick="minmax(min)">Menores salários</a></li>
      <li class="divider" tabindex="0"></li>
      <li><a href="">Cargos</a></li>
      <?php foreach($list_area as $list_ar): 
        $area = $list_ar->nome.PHP_EOL;
      ?>
      <li><a href="#!"><i class="material-icons">view_module</i><?=$area?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="input-field col s6">
    <input placeholder="Filtrar" id="filtro" type="text" class="validate" onkeyup="filterFunction()"/>
  </div>
</div>