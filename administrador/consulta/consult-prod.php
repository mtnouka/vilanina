<?php
$texto = @$_POST['txt_busca'];
$cat = @$_POST['categoria'];
$ativo = @$_POST['ativo'];
$promo = @$_POST['promo'];

if($texto != "" || $cat != ""){
  $filtros = "WHERE 1=1 ";
  if($texto != "") $filtros = $filtros . " AND P.NOME LIKE '%" . $texto. "%'";
  if($ativo != "") $filtros = $filtros . " AND P.ATIVO='" .$ativo."'  ";
  if($promo != "") $filtros = $filtros . " AND P.PROMOCIONAL='" .$promo."'  ";
  if($cat != "Selecione uma Categoria") $filtros = $filtros . " AND C.ID_CATEGORIA=" .$cat."  ";

  $sqlquery = "SELECT p.*, c.nome_cat FROM produto p INNER JOIN categoria c ON p.id_categoria = c.Id_categoria
  ". $filtros . " ORDER BY 'id_produto'";
}else{
  $sqlquery = "SELECT p.*, c.nome_cat FROM produto p INNER JOIN categoria c ON p.id_categoria = c.Id_categoria ORDER BY 'id_produto'";
}

$resultado = mysqli_query($conn, $sqlquery);
$linhas = mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Lista de Produtos</h1>
  </div>
  <div class="row">

    <h4>Filtros de consulta</h4>
    <form method="post">
      <div class="col-sm-3">
        <input name="txt_busca" type="text" class="form-control" placeholder="Insira o nome do Produto">
      </div>
      <div class="col-sm-3">
        <select class="form-control" name="categoria">
          <option>Selecione uma Categoria</option>
          <?php
          $querycat = "SELECT * FROM categoria";
          $resu_cat = mysqli_query($conn, $querycat);
          while ($dados = mysqli_fetch_assoc($resu_cat)) {
            ?>
            <option value="<?php echo $dados['Id_categoria'];?>"><?php echo $dados['nome_cat']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="checkbox col-sm-2">
          <label>
            <input type="checkbox" name="ativo" value="Sim" aria-label="Ativo">Ativo
          </label>
          <label>
            <input type="checkbox" name="promo" value="Sim" aria-label="Promo">Promocional
          </label>
        </div>
        <p>
          <input type="submit" class="btn btn-sm btn-success" value="Pesquisar">
        </p>
      </form>

      <div class="col-md-12">
        <div>
          <a type="button" class="btn btn-sm btn-primary pull-right" href="../admin/tela-inicial.php?link=8">Adicionar novo Produto</a>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th width="3%">Id</th>
              <th width="39%">Nome</th>
              <th width="12%">Categoria</th>
              <th width="12%">Promocional</th>
              <th width="12%">Ativo</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($linhas = mysqli_fetch_array($resultado)) {
              echo "<tr>";
              echo "<td>".$linhas['id_produto']."</td>";
              echo "<td>".$linhas['nome']."</td>";
              echo "<td>".$linhas['nome_cat']."</td>";
              echo "<td>".$linhas['promocional']."</td>";
              echo "<td>".$linhas['ativo']."</td>";
              ?>

              <td>
                <?php $img = $linhas['imagem_prod'];?>
                <a target="_new" href='<?php echo "../img/produto/$img";?>'><button type='button' class='btn btn-xs btn-default'>Imagem
                </button></a>  
                <a href='../admin/tela-inicial.php?link=12&Id=<?php echo $linhas['id_produto']?>'><button type='button' class='btn btn-xs btn-info'>Editar
                </button></a>
                <a href='../admin/tela-inicial.php?link=16&Id=<?php echo $linhas['id_produto']?>' onclick="return confirm('Deseja mesmo deletar este produto?');"><button type='button' class='btn btn-xs btn-danger'>Excluir
                </button></a>
              </td>

              <?php 
              echo "</tr>";
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>