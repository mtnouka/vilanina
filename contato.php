<div class="espaçamento-top container fonte">
    <form action="class/envia.php" method="POST" enctype="multipart/form-data" id="form_cidade">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="titulo" style="margin: 0 auto; width: 60%; margin-bottom: 10px;">Contato</div>

                <div class="form-group row">
                    <label class="label col-lg-2 col-sm-2"for="nome" onfocus >Nome:</label>
                    <input type="text" class=" col form-control form-control-sm" autofocus required name="nome" placeholder="Insira seu nome completo">

                </div>
                <div class="form-group row">
                    <label class="label col-lg-2 col-sm-2" for="email">Email:</label>
                    <input type="email" class="col form-control form-control-sm" required name="email" placeholder="Insira seu endereço de email">
                </div>
                <div class="form-group row">
                    <label class="label col-lg-2 col-sm-2" for="tel">Telefone:</label>
                    <input type="number" class="col form-control form-control-sm" required name="tel" placeholder="(00) 0000-0000">
                </div>
                <div class="form-group row">
                    <label class="label col-lg-2 col-sm-2" for="uf">UF:</label>
                    <select class="col form-control form-control-sm" required name="estado" id="estado">
                        <option value="">Selecione um Estado</option>
                        <?php
                        $result_est = "SELECT * FROM estado ORDER BY nome";
                        $resultado_est = mysqli_query($conn, $result_est);
                        while ($row_est = mysqli_fetch_assoc($resultado_est)) {
                            echo '<option value="' . $row_est['id'] . '">' . $row_est['nome'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group row">
                    <label class="label col-lg-2 col-sm-2" for="cidade">Cidade:</label>
                    <select class="col form-control form-control-sm" required name="cidade" id="cidade">
                        <option value="">Selecione a Cidade</option>
                    </select>
                </div>

                <button type="submit" style="margin: 0 auto; color: white;" class="destaque btn btn-sm">Enviar</button>
            </div>

            <div class="col-lg-3 col-md-5 col-sm-4">
                <div class="form-group" style="padding-top: 8px;">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control form-control-sm" required name="mensagem" rows="13" placeholder="Decidir o que por aqui"></textarea>
                </div>
            </div>

            <iframe style="margin: 0 auto;" class="col-lg-4 col-md-12 col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.2588632335187!2d-47.31543928545113!3d-23.16075038488323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf52f314c24c9d%3A0x526f76d8adf9dbcc!2sAv.+Jos%C3%A9+Maria+Marqu%C3%AAs+de+Oliveira%2C+1200+-+Condom%C3%ADnio+Fechado+Piccolo+Paese%2C+Salto+-+SP!5e0!3m2!1spt-BR!2sbr!4v1512095622840" width="400" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </form>
</div>
<script type="text/javascript">
     
    jQuery(document).ready(
function ($)
{
     $('#estado').change(function () {
          //  $('#carregandosub').show();
            $('#cidade').load('class/lercidades.php?id=' + $('#estado').val());
         //   $('#carregandosub').hide();
        });
});
</script>
 