<?php echo  $this->extend('Layout/principal'); ?>

<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>



<?php echo $this->section('estilos') ?>

<!-- Aqui enviamos para o template principal os estilos -->

<!--style>
    .btn-primary {
        background-color: blue;
        border-color: blue;
    }
</style-->

<?php echo $this->endSection() ?>

<!-- Aqui enviamos para o template principal o conteúdo -->
<?php echo $this->section('conteudo') ?>

<div class="row">

    <div class="col-lg-4">

        <div class="block">

            <div class="block-body">

                <!-- Exibirá os retornos do backend -->
                <div id="response">

                </div>

                <?php echo form_open('/', ['id' => 'form'], ['id' => "$usuario->id"]) ?>

                <!--Chamando o _form para edição-->
                <?php echo $this->include('Usuarios/_form'); ?>

                <div class="form-group mt-5 mb-2">

                    <input id="btn-salvar" type="submit" value="Salvar" class="btn btn-danger btn-sm mr-2">

                    <a href="<?php echo site_url("usuarios/exibir/$usuario->id") ?>" class="btn btn-secondary btn-sm ml-2">Voltar</a>

                </div>

                <?php echo form_close(); ?>

            </div> <!-- Termina aqui block -->

        </div>

    </div>

    <?php echo $this->endSection() ?>

    <?php echo $this->section('scripts') ?>

    <!-- Aqui enviamos para o template principal os scripts -->

    <script>
        $(document).ready(function() {


            $('#form').on('submit', function(e) {

                e.preventDefault();

                $.ajax({

                    type: "POST",
                    url: '<?php echo site_url('usuarios/atualizar'); ?>',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {

                        $('#response').html('');
                        $('#btn-salvar').val('Por favor, aguarde...');

                    },

                });

            });

        });
    </script>

    <?php echo $this->endSection() ?>