<div class="espaçamento-top container">
    <div class="row fonte">
        <div id="carouselExampleControls" class="col-lg-8 col-md-12 carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $controle_ativo = 2;
                $result_carousel = "SELECT * FROM produto ORDER BY id_produto ASC";
                $resultado_carousel = mysqli_query($conn, $result_carousel);

                while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                    if ($controle_ativo == 2) {
                        ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../Administrador/img/produto/<?php echo $row_carousel['imagem_prod']; ?>">
                        </div>
                        <?php
                        $controle_ativo = 1;
                    } else {
                        ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../Administrador/img/produto/<?php echo $row_carousel['imagem_prod']; ?>">
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <form class="col-lg-3" action="?link=4" method="POST" enctype="multipart/form-data">
            <div style="margin: 0 auto; margin-top: 30px; margin-bottom: 10px; width: 50%;" class="titulo">Pesquisa</div>
            <div class="form-group">
                <label for="categoria">Busca por categoria</label>
                <select class="col form-control form-control-sm" name="categoria">
                    <option hidden>Pesquise por categoria</option>
                    <?php
                    $resu_cat = "SELECT * FROM categoria ORDER BY Id_categoria ASC";
                    $resulcat = mysqli_query($conn, $resu_cat);

                    while ($dados = mysqli_fetch_assoc($resulcat)) {
                        ?>
                        <option value="<?php echo $dados['Id_categoria']; ?>"><?php echo $dados['nome_cat']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nome">Busca por Produto</label>
                <input type="text" class="form-control form-control-sm" name="nome" placeholder="Pesquise por nome">
            </div>
            <button type='submit' class='titulo' style="margin: 0 auto;width: 20%; border: 0;">Ok</button>
        </form>
    </div>
</div>

