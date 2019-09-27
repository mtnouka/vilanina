<div class="espaçamento-top container">
    <div class="row fonte">
        <div id="carouselExampleControls" class="col-lg-5 col-md-12 carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $controle_ativo = 2;
                $result_carousel = "SELECT * FROM sobre ORDER BY id_img ASC";
                $resultado_carousel = mysqli_query($conn, $result_carousel);

                while ($row_carousel = mysqli_fetch_assoc($resultado_carousel)) {
                    if ($controle_ativo == 2) {
                        ?>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="admin/img/sobre/<?php echo $row_carousel['imagem_sobre']; ?>">
                        </div>
                        <?php
                        $controle_ativo = 1;
                    } else {
                        ?>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="admin/img/sobre/<?php echo $row_carousel['imagem_sobre']; ?>">
                        </div>
                <?php } }?>
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

        <div class="show col-lg-6 col-md-12" style="overflow: auto; width: 675px">
            <div class="titulo" style="width: 30%;">A Empresa</div>
            <p class="texto-empresa text-justify">Antes mesmo de surgir como Vila Nina Paisagismo e Flora, este ponto comercial já era conhecido na região há mais de 25 anos como “O ponto da loja de plantas”. A história propriamente dita da Vila Nina se inicia em 2010 quando, Ana Paula (Irmã de Randall Fidencio) alugou o ponto que estava inativo havia alguns meses e em homenagem a uma tia muito querida da família, que se chamava Ana Maria, carinhosamente apelidada de “Tia Nina” que havia falecido recentemente. Então foi batizado o empreendimento de “Vila Nina Paisagismo e Flora”. Em 2014 diante da ausência da Gerente da Loja que acompanhou desde o início todos os trabalhos, Ana Paula achou que seria melhor passar o negócio adiante, pois não estava conseguindo se dedicar o quanto era necessário. Isso veio de encontro ao grande momento profissional de Randall Fidencio. Era o ano de 2014, e Randall estava trabalhando da área comercial de uma grande empresa, muito bem remunerado, mas sentindo um vazio que o incomodava bastante, pois ainda lhe faltava algo para lhe completar profissionalmente. Ele que sempre cuidou de plantas, desde muito novo, quando tinha 5 anos de idade, sua avó tinha, entre outras coisas, uma horta na beira do Rio Jundiaí, já na cidade Salto e ele já se destacava nessa área ajudando na manutenção do espaço. Ele cresceu se dedicando a todo tipo de cuidados e sempre muito curioso com o universo das plantas e Meio Ambiente em geral. Durante uma conversa com Ana Paula, foi que Randall percebeu que estava diante de uma grande oportunidade, que era juntar uma grande paixão profissional a um negócio que estava precisando de alguém que se dedicasse de corpo e alma. Rapidamente a ideia foi amadurecida, e foi feita a proposta de compra a Ana Paula e após findar as negociações a compra foi propriamente feita. Em um mês Randall Fidencio estava na direção da Vila Nina Paisagismo e Flora com o objetivo bem definido de levantar a empresa e caminhar com passos firmes em direção ao futuro. Mesmo diante da crise que assolou a economia brasileira nos últimos anos, a empresa tem persistido, e através de produtos e serviços diferenciados está caminhando com passos firmes em direção a um futuro cada dia mais verde e mais bonito.</p>
            <hr class="my-4">
            <p>Afinal nós somos Vila Nina. Mais cor em sua vida, mais vida no seu jardim!</p>
        </div>
    </div>
</div>
