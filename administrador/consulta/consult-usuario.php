<?php
$sqlloga = "SELECT * FROM admin ORDER BY 'Id'";
$resultado = mysqli_query($conn, $sqlloga);
$linhas = mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Lista de Usuários</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p>
        <a type="button" class="btn btn-sm btn-primary pull-right" href="../admin/tela-inicial.php?link=6">Adicionar novo Usuário</a>
      </p>
      <table class="table">
        <thead>
          <tr>
            <th width="3%">Id</th>
            <th>Nome</th>
            <th width="51%">Email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($linhas = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$linhas['Id']."</td>";
            echo "<td>".$linhas['Nome']."</td>";
            echo "<td>".$linhas['Email']."</td>";
            ?>

            <td> 
              <a href='../admin/tela-inicial.php?link=10&Id=<?php echo $linhas['Id']?>'><button type='button' class='btn btn-xs btn-info'>Editar
              </button></a>
              <a href='../admin/tela-inicial.php?link=14&Id=<?php echo $linhas['Id']?>' onclick="return confirm('Deseja mesmo deletar este usuário?');"><button type='button' class='btn btn-xs btn-danger'>Excluir
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