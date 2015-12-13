<?php

  include 'funcoes_usuarios.php';

  if(cadastrar($_POST)){
    header('Location: index.php');
  }else{
    header('Location: cadastro.php');
  }

 ?>
