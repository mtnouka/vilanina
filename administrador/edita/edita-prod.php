<?php
$Id = $_GET['Id'];
$sqledtprod = "SELECT * FROM produto WHERE id_produto = '$Id' LIMIT 1";
$result = mysqli_query($conn, $sqledtprod);
$resultado = mysqli_fetch_assoc($result);
  $id_cat_prod = $resultado['id_categoria'];//chave extrangeira
  $ativo = $resultado['ativo'];
  $promo = $resultado['promocional'];
  $foto = $resultado['imagem_prod'];
  ?>

  <div class="container theme-showcase" role="main">
    <div class="page-header">
      <h1>Editar Produto</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="../processa/proc-edt-prod.php" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nome" class="col-sm-3 control-label">Nome</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="nome" required autofocus value="<?php echo $resultado['nome']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="categoria" class="col-sm-3 control-label">Categoria</label>
            <div class="col-sm-3">
              <select class="form-control" name="categoria" required>
                <option>Selecione uma Categoria</option>
                <?php
                $querycat = "SELECT * FROM categoria";
                $resultcat = mysqli_query($conn, $querycat);
                while ($dados = mysqli_fetch_assoc($resultcat)) {
                  $id_categoria = $dados['Id_categoria'];
                  ?>
                  <option value="<?php echo $dados['Id_categoria'];?>"<?php if ($id_categoria == $id_cat_prod) {
                    echo 'selected';
                  } ?>
                  ><?php echo $dados['nome_cat']; ?></option>
                  <?php } ?>
                </select>
              </div>

              <label for="opcionais" class="col-sm-2 control-label">Opcionais:</label>
              <div class="checkbox col-sm-3">
                <label>
                  <input type="checkbox" name="ativo" value="Sim" aria-label="Ativo"<?php if ($ativo != ""){ echo 'checked';}?>>Ativo
                </label>
                <label>
                  <input type="checkbox" name="promo" value="Sim" aria-label="Promo"<?php if ($promo != ""){ echo 'checked';}?>>Promocional
                </label>
              </div>
            </div>

            <div class="form-group">
              <label for="imagem" class="col-sm-3 control-label">Imagem</label>
              <div class="col-sm-3">
                  <input type="file" name="imagem">
                <p class="help-block"><?php 
                if ($foto == null) {
                  echo "O produto não possui imagem.";
                } else {?>
                <a type="button" class="btn btn-info btn-sm " target="_new" href="<?php echo "../img/produto/$foto";?>">Imagem Atual</a>
                <?php } ?>
              </p>
            </div>
          </div>

          <input type="hidden" name="Id" value="<?php echo $Id; ?>">
          <input type="hidden" name="img_antiga" value="<?php echo $foto; ?>">

          <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
              <button type="submit" class="btn btn-success">Salvar</button>
              <a type="button" class="btn btn-warning" href="../admin/tela-inicial.php?link=4">Cancelar</a>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>