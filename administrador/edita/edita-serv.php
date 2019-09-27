<?php
$Id = $_GET['Id'];
$sqledtserv = "SELECT * FROM servico WHERE Id_servico = '$Id' LIMIT 1";
$result = mysqli_query($conn,$sqledtserv);
$resultado = mysqli_fetch_assoc($result);
$foto = $resultado['Imagem_serv'];
?>

<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Editar Serviços</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="../processa/proc-edt-serv.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="nome" class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nome" value="<?php echo $resultado['Nome']; ?>" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="descricao" class="col-sm-3 control-label">Descrição</label>
          <div class="col-sm-7">
            <textarea class="form-control" rows="4" name="descricao" required><?php echo $resultado['descricao']; ?></textarea>
          </div>
        </div>
        
        <div class="form-group">
          <label for="imagem" class="col-sm-3 control-label">Imagem</label>
          <div class="col-sm-3">
            <input type="file" name="imagem">
            <p class="help-block"><?php 
            if ($foto == "0") {
              echo "O serviço não possui imagem.";
            } else {?>
            <a type="button" class="btn btn-info btn-sm" target="_new" href="<?php echo "../img/servico/$foto";?>">Imagem Atual</a>
            <?php } ?>
          </p>
        </div>
      </div>

      <input type="hidden" name="id_serv" value="<?php echo $resultado['Id_servico']; ?>">
      <input type="hidden" name="img_antiga" value="<?php echo $foto; ?>">

      <div class="form-group">
        <div class="col-sm-offset-5 col-sm-10">
          <button type="submit" class="btn btn-success">Salvar</button>
          <a type="button" class="btn btn-warning" href="../admin/tela-inicial.php?link=3">Cancelar</a>
        </div>
      </div>

    </form>

  </div>
</div>
</div>