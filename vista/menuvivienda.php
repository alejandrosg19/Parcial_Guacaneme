<nav class="navbar navbar-expand-md navbar-light bg-warning">
  <a class="navbar-brand" href="index.php?pid=<?php echo base64_encode("vista/inicio.php"); ?>"><i class="fas fa-store"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Vivienda
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("vista/vivienda/ingresarvivienda.php"); ?>">Ingresar vivienda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("vista/vivienda/consultarvivienda.php"); ?>">Consultar vivienda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?pid=<?php echo base64_encode("vista/vivienda/consultarporpagina.php"); ?>">Consultar vivienda por pagina</a>
            </div>
          </li>
      </ul>
  </div>
</nav>
