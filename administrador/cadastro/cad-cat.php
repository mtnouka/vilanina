<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Categorias</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="../processa/proc-cad-cat.php" enctype="multipart/form-data>">

        <div class="form-group">
          <label for="nome_cat" class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nome_cat" placeholder="Nome da Categoria" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="descricao" class="col-sm-3 control-label">Descrição</label>
          <div class="col-sm-7">
            <textarea class="form-control" rows="3" name="descricao" placeholder="Insira uma descrição" required></textarea>
          </div>
        </div>

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