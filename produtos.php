<?php
include_once 'class/conexao.php';

$texto = @$_POST['nome'];
$cat = @$_POST['categoria'];

if ($texto != "" || $cat != "") {
    $filtros = "WHERE 1=1 ";
    if ($texto != "")
        $filtros = $filtros . " AND P.NOME LIKE '%" . $texto . "%'";
    if ($cat != "Pesquise por categoria")
        $filtros = $filtros . " AND C.ID_CATEGORIA=" . $cat . "  ";

    $sqlquery = "SELECT p.*, c.nome_cat FROM produto p INNER JOIN categoria c ON p.id_categoria = c.Id_categoria
  " . $filtros . " ORDER BY 'id_produto'";
}else {
    $sqlquery = "SELECT * FROM produto ORDER BY 'id_produto'";
}
$resultado = mysqli_query($conn, $sqlquery);
$linhas = mysqli_num_rows($resultado);
?>

<div class="container-fluid row text-center text-lg-left fonte justify-content-center scroll">

    <?php
    while ($linhas = mysqli_fetch_assoc($resultado)) {
        ?>
        <div class="col-lg-3 col-md-4 col-xs-6 serv">
            <div class="titulo"><?php echo $linhas['nome']; ?></div>
            <a href="admin/img/produto/<?php echo $linhas['imagem_prod']; ?>" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail rounded" src="admin/img/produto/<?php echo $linhas['imagem_prod']; ?>">
            </a>
        </div>
    <?php } ?>