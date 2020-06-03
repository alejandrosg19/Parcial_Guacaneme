<?php
  require_once "persistencia/conexion.php";
  require_once "persistencia/viviendaDAO.php";

    class vivienda{
          private $id;
          private $direccion;
          private $telefono;
          private $barrio;
          private $conexion;
          private $viviendaDAO;

          public function getId(){
              return $this -> id;
          }

          public function getDireccion(){
              return $this -> direccion;
          }

          public function getTelefono(){
              return $this -> telefono;
          }

          public function getBarrio(){
              return $this -> barrio;
          }

          public function  Vivienda($id = "", $direccion = "", $telefono = "", $barrio = ""){
              $this -> id = $id;
              $this -> direccion = $direccion;
              $this -> telefono = $telefono;
              $this -> barrio = $barrio;
              $this -> conexion = new Conexion();
              $this -> viviendaDAO = new ViviendaDAO($this -> id, $this -> direccion, $this -> telefono, $this -> barrio);
          }

          public function insertar(){
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> viviendaDAO -> insertar());
            $this -> conexion -> cerrar();
          }

          public function consultar(){
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> viviendaDAO -> consultar());

            $viviendaarray = array();
               while($resultado = $this -> conexion -> extraer()){
                    $vivienda = new Vivienda("", $resultado[0], $resultado[1], $resultado[2]);
                    array_push($viviendaarray,$vivienda);
                }
            $this -> conexion -> cerrar();
            return $viviendaarray;
          }

          public function consultarPaginacion($cantidad, $pagina){
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> viviendaDAO -> consultarPaginacion($cantidad, $pagina));
            $arrayvivienda = array();
            while(($resultado = $this -> conexion -> extraer()) != null){
                $vivienda = new Vivienda("",$resultado[0], $resultado[1], $resultado[2]);
                array_push($arrayvivienda, $vivienda);
            }
            $this -> conexion -> cerrar();
            return $arrayvivienda;
        }

        public function consultarCantidad(){
            $this -> conexion -> abrir();
            $this -> conexion -> ejecutar($this -> viviendaDAO -> consultarCantidad());
            $this -> conexion -> cerrar();
            return $this -> conexion -> extraer()[0];
        }

      }
?>
