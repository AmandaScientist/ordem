<?php echo  $this->extend('Layout/principal'); ?>

<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>



<?php echo $this->section('estilos') ?> 

<!-- Aqui enviamos para o template principal os estilos -->

<?php echo $this->endSection() ?>



<?php echo $this->section('conteudo') ?> 

<!-- Aqui enviamos para o template principal o conteúdo -->

<h1>Estendendo o layout principal através da view index do Home</h1>

<?php echo $this->endSection() ?>




<?php echo $this->section('scripts') ?> 

<!-- Aqui enviamos para o template principal os scripts -->

<?php echo $this->endSection() ?>