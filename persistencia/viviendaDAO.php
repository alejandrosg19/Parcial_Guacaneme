<?php
  require_once "persistencia/conexion.php";
  require_once "persistencia/viviendaDAO.php";

    class viviendaDAO{
          private $id;
          private $direccion;
          private $telefono;
          private $barrio;
          private $conexion;
          private $viviendaDAO;

          public function  ViviendaDAO($id = "", $direccion = "", $telefono = "", $barrio = ""){
              $this -> id = $id;
              $this -> direccion = $direccion;
              $this -> telefono = $telefono;
              $this -> barrio = $barrio;
          }

          public function insertar(){
              return "insert into vivienda (direccion, telefono, barrio)
              values ('" . $this -> direccion . "', '" . $this -> telefono . "', '" . $this -> barrio . "')";
          }

          public function consultar(){
              return "select direccion, telefono, barrio
                from vivienda";
          }

          public function consultarPaginacion($cantidad, $pagina){
              return "select direccion, telefono, barrio
                      from vivienda
                      limit " . (($pagina-1) * $cantidad) . ", " . $cantidad;
          }

          public function consultarCantidad(){
              return "select count(id)
                      from vivienda";
          }
      }
?>
