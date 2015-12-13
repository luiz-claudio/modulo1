<?php

  include 'funcoes_usuarios.php';



$id=$_GET['id'];

deletar($id);
header('Location: index.php');

 ?>
