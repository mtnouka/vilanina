<?php
$sqlsobre = "SELECT * FROM sobre ORDER BY 'id_img'";
$resultado = mysqli_query($conn, $sqlsobre);
$linhas = mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
    <h1>Imagens Destaque</h1>
  </div>
  <div class="row col-md-6">
    <h4>Cadastro de imagens</h4>
    <form method="POST" action="../processa/proc-cad-sobre.php" enctype="multipart/form-data">
      <p>
        <div class="form-group container">
          <label for="imagem" class="col-sm-1 control-label">Imagem</label>
          <div class="col-sm-4">
            <input type="file" name="imagem">
          </div>
          <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
        </div>
      </p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th width="3%">Id</th>
              <th width="75%">Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($linhas = mysqli_fetch_array($resultado)) {
              echo "<tr>";
              echo "<td>".$linhas['id_img']."</td>";
              echo "<td>".$linhas['imagem_sobre']."</td>";
              ?>

              <td> 
                <?php $img = $linhas['imagem_sobre'];?>
                <a target="_new" href='<?php echo "../img/sobre/$img";?>'><button type='button' class='btn btn-xs btn-default'>Visualizar
                </button></a>
                <a href='../admin/tela-inicial.php?link=20&Id=<?php echo $linhas['id_img']?>' onclick="return confirm('Deseja mesmo deletar esta imagem?');"><button type='button' class='btn btn-xs btn-danger'>Excluir
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