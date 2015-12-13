<?php $pagina = 'cadastro'; ?>

<?php include 'topo.html'; ?>

<?php include 'menu.html'; ?>

<?php include 'funcoes_usuarios.php'; ?>

<?php
  $titulo = 'Editar';
  $usuario = procurar((int)$_GET['id']);
?>

<?php include 'formulario.php'; ?>

<?php include 'rodape.html'; ?>
