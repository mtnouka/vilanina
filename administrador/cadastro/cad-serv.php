<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Serviços</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="../processa/proc-cad-serv.php" enctype="multipart/form-data">

        <div class="form-group">
          <label for="nome" class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nome" placeholder="Nome do Serviço" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="descricao" class="col-sm-3 control-label">Descrição</label>
          <div class="col-sm-7">
            <textarea class="form-control" rows="4" name="descricao" placeholder="Insira uma descrição para o serviço" required></textarea>
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
            <a type="button" class="btn btn-warning" href="../admin/tela-inicial.php?link=3">Cancelar</a>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>