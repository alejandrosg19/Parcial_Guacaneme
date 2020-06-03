<?php
  $vivienda = new Vivienda();
  $arrayvivienda = $vivienda -> consultar();
?>
<div class="container-fluid mt-3">
      <div class="card">
          <div class="card-header bg-secondary text-white">
              <h2>Lista de libros</h2>
          </div>
          <div class="card-body">
              <table class="table">
                  <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th>DIRRECION</th>
                        <th>TELEFONO</th>
                        <th>BARRIO</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i=1;
                      foreach ($arrayvivienda as $vivienda) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>".$vivienda -> getDireccion()."</td>";
                            echo "<td>".$vivienda -> getTelefono()."</td>";
                            echo "<td>".$vivienda -> getBarrio()."</td>";
                            echo "</tr>";
                          $i++;
                      }
                    ?>
                  </tbody>
            </table>
          </div>
      </div>
</div>
