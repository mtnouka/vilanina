<div class="container-fluid row text-center text-lg-left fonte justify-content-center" style="width: 100%;">

    <?php
    $result_carousel = "SELECT * FROM servico ORDER BY Id_servico ASC";
    $resultado_carousel = mysqli_query($conn, $result_carousel);

    while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
        ?>
        <div class="col-lg-3 col-md-4 col-xs-6 serv">
            <div class="titulo"><?php echo $row_carousel['Nome']; ?></div>
            <a href="admin/img/servico/<?php echo $row_carousel['Imagem_serv']; ?>" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail rounded" src="admin/img/servico/<?php echo $row_carousel['Imagem_serv']; ?>">
                <div>
                    <p class=""><?php echo $row_carousel['descricao']; ?></p>
                </div>
            </a>
        </div>
    <?php } ?>