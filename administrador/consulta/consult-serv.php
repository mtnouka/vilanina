<?php

$sqlserv = "SELECT * FROM servico ORDER BY 'Id_servico'";
$resultado = mysqli_query($conn, $sqlserv);
$linhas = mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Lista de Serviços</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p>
        <a type="button" class="btn btn-sm btn-primary pull-right" href="../admin/tela-inicial.php?link=7">Adicionar novo Serviço</a>
      </p>
      <table class="table">
        <thead>
          <tr>
            <th width="3%">Id</th>
            <th width="14%">Nome</th>
            <th width="60%">Descrição</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($linhas = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$linhas['Id_servico']."</td>";
            echo "<td>".$linhas['Nome']."</td>";
            echo "<td>".$linhas['descricao']."</td>";
            ?>

            <td>
              <?php $img = $linhas['Imagem_serv'];?>
              <a target="_new" href='<?php echo "../img/servico/$img";?>'><button type='button' class='btn btn-xs btn-default'>Imagem
              </button></a> 
              <a href='../admin/tela-inicial.php?link=11&Id=<?php echo $linhas['Id_servico']?>'><button type='button' class='btn btn-xs btn-info'>Editar
              </button></a>
              <a href='../admin/tela-inicial.php?link=15&Id=<?php echo $linhas['Id_servico']?>' onclick="return confirm('Deseja mesmo deletar este serviço?');"><button type='button' class='btn btn-xs btn-danger'>Excluir
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