<?php echo  $this->extend('Layout/principal'); ?>

<?php echo $this->section('titulo') ?> <?php echo $titulo; ?> <?php echo $this->endSection() ?>



<?php echo $this->section('estilos') ?> 

<!-- Aqui enviamos para o template principal os estilos -->

<?php echo $this->endSection() ?>



<?php echo $this->section('conteudo') ?> 

<div class="row">
<div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Compact Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter      </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
  



    </div>

<?php echo $this->endSection() ?>




<?php echo $this->section('scripts') ?> 

<!-- Aqui enviamos para o template principal os scripts -->

<?php echo $this->endSection() ?>