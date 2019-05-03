<?php
    class AdaCnxBd{

    //Atributos Basicos de la clase
    var $servidor = "localhost"; //Nombre de la maquina donde se encuentra la BD generalmente es localhost
    var $nombreBD = "estacion"; //Nombre de la Base de Datos
    var $nombreDeUsuario = "root"; //Nombre del usuario autorizado para entrar a la Base de Datos
    var $contrasena = ""; //Contraseña del Usuario


    //Atributos Modificados
    var $enlace;//Almacena el enlace con la Base de Datos una vez establecido
    var $resultado;//Almacena el resultado obtenido por la consulta a la BD
    var $consulta;//Almacena la consulta realizada con el metodo consultaBD();



    //Constructor de la Clase
    //Inicializa algunos atributos Básicos
    //Ejemplo: $objBD=new //AdaCnxBD("localhost","MiBaseDeDatos","MiNombreDeUsuario","MiContraseña");

    function AdaCnxBd($servidor,$nombreBD,$nombreDeUsuario,$contrasena){
        $this->servidor=$servidor;
        $this->nombreBD=$nombreBD;
        $this->nombreDeUsuario=$nombreDeUsuario;
        $this->contrasena=$contrasena;
    }



    //Metodos y Procedimientos
    //Conectar a la base de datos
    function conectarBD(){
        //Si hace conexion y conecta con la BD guarda la conexion en $enlace
        if(/*$this->enlace=*/mysqli_connect($this->servidor, $this->nombreDeUsuario, $this->contrasena)){
            $enlace = new mysqli($servidor,$nombredeusuario,$contraseña);
            if(mysqli_select_db($this->enlace,$this->nombreBD)){
                $enlace=$this->enlace;
                echo "OK";
            }else{
                echo "Error al seleccionar la base de datos!";
                exit();
            }
        }else{
        echo "Error al enlazar al Servidor!";
        exit();
        }
    }

    //consultarBD(); permite realizar consultas en la BD enlazada
    function queryBD($sentenciaSQL){
        $this->consulta=mysqli_query($sentenciaSQL,$this->enlace);
    }

    //obtenerResultado(); Devuelve los resultados de la Base de Datos
    function obtenerResultado(){
        $this->resultado=mysqli_fetch_array($this->consulta);
        return $this->resultado;
    }

    //liberarConsulta(); libera el contenido del atributo que almacena las consultas
    function liberarConsulta(){
        mysqli_free_result($this->consulta);
    }

    function insertarRegistro($sentenciaSQL){
        mysqli_query($sentenciaSQL,$this->enlace);
    }
}//Fin de la Clase AdaCnxBd

    ?>






