<?php
  $direccion ="";
  if(isset($_POST["direccion"])){
      $direccion = $_POST["direccion"];
  }
  $telefono ="";
  if(isset($_POST["telefono"])){
      $telefono = $_POST["telefono"];
  }
  $barrio ="";
  if(isset($_POST["barrio"])){
      $barrio = $_POST["barrio"];
  }

  if(isset($_POST["crear"])){
      $vivienda = new Vivienda("",$direccion,$telefono,$barrio);
      $vivienda -> insertar();
  }
?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
              <div class="card">
                  <div class="card-header text-center bg-secondary text-white">
                      <h2>REGISTRAR NUEVA VIVIENDA</h2>
                  </div>
                  <div class="card-body">
                      <div class="row">
                            <div class="col-9">
                                <form class="" action="index.php?pid=<?php echo base64_encode("vista/vivienda/ingresarvivienda.php")?>" method="post">
                                    <div class="form group">
                                        <strong><label>DIRECCION</label></strong>
                                        <input type="text" name="direccion" class="form-control" required>
                                    </div>
                                    <div class="form group">
                                        <strong><label>TELEFONO</label></strong>
                                        <input type="number" name="telefono" class="form-control" min="1"required>
                                    </div>
                                    <div class="form group">
                                        <strong><label>BARRIO</label></strong>
                                        <input type="text" name="barrio" class="form-control" required>
                                    </div>
                                      <div class="dropdown-divider"></div>
                                    <div class="form group">
                                        <button type="submit" name="crear" class="form-control btn btn-secondary">Crear vivienda</button>
                                    </div>
                                    <?php if(isset($_POST["crear"])){ ?>
                                    <div class="dropdown-divider"></div>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Vivienda creada exitosamente!</strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                  <?php } ?>
                                </form>
                            </div>
                            <div class="col-3">
                                <form class="" action="index.php?pid=<?php echo base64_encode("vista/vivienda/ingresarvivienda.php")?>" method="post">
                                    <div>
                                        <img src="img/vivienda.png" width="100%">
                                    </div>
                                </form>
                            </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>

</div>
