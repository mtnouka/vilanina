<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Cadastrar Usuários</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="form-horizontal" method="POST" action="../processa/proc-cad-usuario.php" enctype="multipart/form-data>">

        <div class="form-group">
          <label for="nome" class="col-sm-3 control-label">Nome</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo" required autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>
          <div class="col-sm-7">
            <input type="email" class="form-control" name="email" placeholder="Digite um Email" required>
          </div>
        </div>

        <div class="form-group">
          <label for="senha" class="col-sm-3 control-label">Senha</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" name="senha" placeholder="Insira uma senha" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-5 col-sm-10">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a type="button" class="btn btn-warning" href="../admin/tela-inicial.php?link=2">Cancelar</a>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>