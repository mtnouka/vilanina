<?php
$sqlcat = "SELECT * FROM categoria ORDER BY 'Id_categoria'";
$resultado = mysqli_query($conn, $sqlcat);
$linhas = mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Lista de Categorias</h1>
  </div>
  <div class="row">
    <p>
        <a type="button" class="btn btn-sm btn-primary pull-right" href="../admin/tela-inicial.php?link=9">Adicionar nova Categoria</a>
      </p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th width="3%">Id</th>
            <th width="14%">Nome</th>
            <th width="62%">Descrição</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($linhas = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$linhas['Id_categoria']."</td>";
            echo "<td>".$linhas['nome_cat']."</td>";
            echo "<td>".$linhas['descricao']."</td>";
            ?>

            <td> 
              <a href='../admin/tela-inicial.php?link=13&Id=<?php echo $linhas['Id_categoria']?>'><button type='button' class='btn btn-xs btn-info'>Editar
              </button></a>
              <a href='../admin/tela-inicial.php?link=17&Id=<?php echo $linhas['Id_categoria']?>' onclick="return confirm('Deseja mesmo deletar esta categoria?');"><button type='button' class='btn btn-xs btn-danger'>Excluir
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