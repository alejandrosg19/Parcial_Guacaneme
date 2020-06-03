<?php
    $vivienda = new Vivienda();
    $cantidad = 2;
    if(isset($_GET["cantidad"])){
        $cantidad = $_GET["cantidad"];
    }
    $pagina = 1;
    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
    }

    $viviendas = $vivienda -> consultarPaginacion($cantidad, $pagina);
    $totalRegistros = $vivienda -> consultarCantidad();

    $totalPaginas = intval($totalRegistros/$cantidad);

    if($totalRegistros%$cantidad != 0){
        $totalPaginas++;
    }
    $ultimaPagina = ($totalPaginas == $pagina);
?>
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col">
      <div class="card">
				<div class="card-header text-white bg-secondary text-white">
					<h4>CONSULTAR VIVIENDA POR PAGINA</h4>
				</div>
				<div class="text-right">Resultados <?php echo (($pagina-1)*$cantidad+1) ?> al <?php echo (($pagina-1)*$cantidad)+count($viviendas) ?> de <?php echo $totalRegistros ?> registros encontrados</div>
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
						foreach($viviendas as $v){
						    echo "<tr>";
						    echo "<td>" . $i . "</td>";
						    echo "<td>" . $v -> getDireccion() . "</td>";
						    echo "<td>" . $v -> getTelefono() . "</td>";
						    echo "<td>" . $v -> getBarrio() . "</td>";
						    echo "</tr>";
						    $i++;
						}
						?>
          </tbody>
					</table>
					<div class="text-center">
        				<nav>
        					<ul class="pagination">
        						<li class="page-item <?php echo ($pagina==1)?"disabled": ""; ?>"><a class="page-link" href="<?php echo "index.php?pid=" . base64_encode("vista/vivienda/consultarporpagina.php") . "&pagina=" . ($pagina-1) . "&cantidad=" . $cantidad ?>"> &lt;&lt; </a></li>
        						<?php
        						for($i=1; $i<=$totalPaginas; $i++){
        						    if($i==$pagina){
        						        echo "<li class='page-item active bg-secondary' aria-current='page'><span class='page-link'>" . $i . "<span class='sr-only'></span></span></li>";
        						    }else{
        						        echo "<li class='page-item bg-secondary'><a class='page-link' href='index.php?pid=" . base64_encode("vista/vivienda/consultarporpagina.php") . "&pagina=" . $i . "&cantidad=" . $cantidad . "'>" . $i . "</a></li>";
        						    }
        						}
        						?>
        						<li class="page-item <?php echo ($ultimaPagina)?"disabled": ""; ?>"><a class="page-link" href="<?php echo "index.php?pid=" . base64_encode("vista/vivienda/consultarporpagina.php") . "&pagina=" . ($pagina+1) . "&cantidad=" . $cantidad ?>"> &gt;&gt; </a></li>
        					</ul>
        				</nav>
					</div>
				</div>
      </div>
		</div>
	</div>
</div>
