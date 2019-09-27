<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Produtos</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="../processa/proc-cad-prod.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="nome" class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nome" placeholder="Nome do Produto" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="categoria" class="col-sm-3 control-label">Categoria</label>
          <div class="col-sm-3">
            <select class="form-control" name="categoria" required>
              <option>Selecione uma Categoria</option>
              <?php
              $sqlcat = "SELECT * FROM categoria";
              $resultado = mysqli_query($conn, $sqlcat);
              while ($dados = mysqli_fetch_assoc($resultado)) {
                ?>
                <option value="<?php echo $dados['Id_categoria'];?>"><?php echo $dados['nome_cat']; ?></option>
                <?php } ?>
              </select>
            </div>

            <label for="opcionais" class="col-sm-2 control-label">Opcionais:</label>
            <div class="checkbox col-sm-3">
              <label>
                <input type="checkbox" name="ativo" value="Sim" aria-label="Ativo">Ativo
              </label>
              <label>
                <input type="checkbox" name="promo" value="Sim" aria-label="Promo">Promocional
              </label>
            </div>
          </div>

          
          <div class="form-group">
            <label for="imagem" class="col-sm-3 control-label">Imagem</label>
            <div class="col-sm-3">
              <input type="file" name="imagem" required>
            </div>
          </div>

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