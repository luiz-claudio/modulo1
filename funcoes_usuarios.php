<?php

  function listar(){
    $conexao = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '001205');
    $query = 'SELECT * FROM usuarios';
    $resultado = $conexao->query($query);
    return $resultado->fetchAll();
  }

  function cadastrar( array $usuario ){
    $senha = md5($usuario['senha']);
    $conexao = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '001205');
    $query = "INSERT INTO usuarios(nome, email, senha, nascimento) VALUES('".$usuario['nome']."', '".$usuario['email']."', '$senha', '".$usuario['nascimento']."')";
    return $conexao->query($query);
  }

  function procurar( $id){
    $conexao = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '001205');
    $query = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = $conexao->query($query);
    return $resultado->fetch(PDO::FETCH_ASSOC);
  }

  function editar(array $usuario){
    $senha = md5($usuario['senha']);
    $conexao = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '001205');
    $query = "UPDATE usuarios set nome='".$usuario['nome']."',email='".$usuario['email']."',senha='$senha',nascimento='".$usuario['nascimento']."'WHERE id=".$usuario['id']." ";
    $resultado = $conexao->query($query);
    return $resultado->fetch(PDO::FETCH_ASSOC);
  }

  function deletar($id){

    $conexao = new PDO('mysql:host=localhost;dbname=usuarios', 'root', '001205');
    $query = "DELETE from usuarios where id= '$id' ";
    $resultado = $conexao->query($query);
    return $resultado->fetch(PDO::FETCH_ASSOC);
  }


?>
