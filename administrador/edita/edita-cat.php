<?php
  $Id = $_GET['Id'];
  $sqledtcat = "SELECT * FROM categoria WHERE Id_categoria = '$Id' LIMIT 1";
  $result = mysqli_query($conn, $sqledtcat);
  $resultado = mysqli_fetch_assoc($result);
?>

<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Editar Categoria</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="../processa/proc-edt-cat.php">

        <div class="form-group">
          <label for="nome_cat" class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nome_cat" value="<?php echo $resultado['nome_cat']; ?>" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="descricao" class="col-sm-3 control-label">Descrição</label>
          <div class="col-sm-7">
            <textarea class="form-control" rows="3" name="descricao" required><?php echo $resultado['descricao']; ?></textarea>
          </div>
        </div>

        <input type="hidden" name="id_cat" value="<?php echo $resultado['Id_categoria']; ?>">

        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a type="button" class="btn btn-warning" href="../admin/tela-inicial.php?link=5">Cancelar</a>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>