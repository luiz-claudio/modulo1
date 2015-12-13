<?php $pagina = 'lista'; ?>

<?php include 'topo.html'; ?>

<?php include 'menu.html'; ?>

<?php include 'funcoes_usuarios.php'; ?>
<div class="col-md-1">
    </div>
<div class="col-md-7">
  <h2 class="sub-header">Lista de Usuarios</h2>
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <td>#</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Nascimento</td>
        <td>EXCLUIR</td>
      </tr>
    </thead>
    <tbody>
      <?php $usuarios = listar(); ?>
       <?php if ($usuarios): ?>
         <?php foreach ($usuarios as $usuario): ?>
          <tr>
            <td><a href="editar.php?id=<?= $usuario['id'] ?>"><?= $usuario['id'] ?></a></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td><?=  implode("-",array_reverse(explode("-",$usuario['nascimento']))); ?></td>
            <td><a href="excluir.php?id=<?= $usuario['id'] ?>" > EXCLUIR </a> </td>
          </tr>
         <?php endforeach; ?>
       <?php else: ?>
        <tr>
          <td colspan="3">Nenhum registro encontrado</td>
        </tr>
       <?php endif; ?>
    </tbody>
  </table>
</div>
<?php include 'rodape.html'; ?>
