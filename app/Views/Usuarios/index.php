<?php echo  $this->extend('Layout/principal'); ?>

<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>



<?php echo $this->section('estilos') ?> 

<!-- Aqui enviamos para o template principal os estilos -->
<link href="https://cdn.datatables.net/v/bs4/dt-2.0.7/r-3.0.2/datatables.min.css" rel="stylesheet">
 

<?php echo $this->endSection() ?>



<?php echo $this->section('conteudo') ?> 

<div class="row">
<div class="col-lg-12">
                <div class="block">
                  <div class="table-responsive"> 
                    <table id="ajaxTable" class="table table-striped table-sm" style="width: 100%;">
                      <thead>
                        <tr>
                          <th>Imagem</th>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Situação</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>

    </div>

<?php echo $this->endSection() ?>




<?php echo $this->section('scripts') ?> 

<!-- Aqui enviamos para o template principal os scripts -->
<script src="https://cdn.datatables.net/v/bs4/dt-2.0.7/r-3.0.2/datatables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#ajaxTable').DataTable({
    "ajax": "<?php echo site_url('usuarios/recuperausuarios'); ?>",
    columns: [
        { "data": "imagem"},
        { "data": "nome"},
        { "data": "email"},
        { "data": "ativo"},
    ]
  });
});


  </script>


<?php echo $this->endSection() ?>