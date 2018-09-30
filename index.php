<?php
include_once('cabecalho.php');

$json = file_get_contents('funcionarios.json');
$json = json_decode($json);
$list_func = $json->funcionarios;
$list_area = $json->areas;
?>

<div class=" grey lighten-4 content">
  
 <div class="flex">
  <div class="container">
    <?php include_once('filtro_da_tabela.php'); ?>
    <?php include_once('tabela_de_funcionarios.php'); ?>
  </div>
    <?php include_once('dados.php'); ?>
</div>  
</div>  