<div class="container-fluid">
  <div class="row">
    <div class="col-md-1">
    		</div>
        <div class="col-md-5">


  <h2 class="sub-header"> <?= $titulo ?> </h2>
<?php
  if($_GET){ $id =$_GET['id'];

};
?>
  <form class="form-horizontal" action="<?php if ($titulo == 'Editar') {echo "editar-usuarios.php";}else {echo "cadastrar-usuarios.php";}; ?>" method="post">
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" value="<?= isset($usuario) ? $usuario['nome'] : '' ?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?= isset($usuario) ? $usuario['email'] : '' ?>" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="password" name="senha" value="" class="form-control" required>
    <input type="hidden" name="id" value="<?php  echo "$id";?>" />
    </div>
    <div class="form-group">
      <label for="nascimento">Nascimento</label>
      <input type="date" name="nascimento" value="<?= isset($usuario) ? $usuario['nascimento'] : '' ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-large btn-block btn-primary"><?php if ($titulo == 'Editar'){ echo "Editar";} else {echo "Salvar";}; ?></button>
  </form>
</div>
</div>
</div>
