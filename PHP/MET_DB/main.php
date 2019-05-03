<?php
    $fechaInicio = trim(htmlspecialchars( strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
    $fechaFin = trim(htmlspecialchars( strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
    $unidad = trim(htmlspecialchars( strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));
    $valor = trim(htmlspecialchars( strip_tags($_REQUEST["email"]), ENT_QUOTES, "UTF-8"));


    

    https://programacion.net/codigo/consultar_bd_mysql_utilizando_poo_135
/*

        if (isset($fechaInicio) && !empty($fechaInicio)){
            $FF=strtotime($fechaInicio);
        }else{
            $FF=NULL;
        }

        if (isset($fechaFin) && !empty($fechaFin)){
            $FI=strtotime($fechaFin);
        }else{
            $FI=NULL;
        }

        between ($fechaI, $fechaF){
            if($fechaI & $fechaF){
                $where = 
            }else if($fechaI){
                
            }else{
                
            }
          }
    $conn = new mysqli("localhost","usuario","passwd","db");
    if ($conn->connect_errno > 0) {
        trigger_error($db->connect_error);
        }
    
    $query = "SELECT ?
    FROM table ? ;



        
        date("Y-m-d H:i", $FI);
        
        date("Y-m-d H:i", $FI);


       

    request ($fechaInicio, ) {
        this.$fechaInicio = strtotime();
        private $fechaFin = $_REQUEST['FF'];
        private $unidad = $_REQUEST['Unidad_Medida'];
        private $valor = $_REQUEST['Valor'];
        }
        
    

    $conn = mysqli_connect("localhost", "root", "", "weather_station") or die("Problema en la conexión");
    $reg = mysqli_query($conn, "SELECT limit ,5"
                        ) or die("Error en la consulta: ".mysqli_error($conn));




funcion($inicio){

    $registros = mysqli_query($conn, 'SELECT m.Fecha_Hora,s.modelo,m.Valor,s.id,m.Sensores_id,m.Variables_Id 
                                            FROM medidas m inner join sensores s on m.Sensores_id = s.id 
                                            ORDER BY Fecha_Hora 
                                            LIMIT $inicio,6') 
    or die("Problemas en el select ".mysqli_error($conn));  
}               
                        
                        
*/                        
?>

<?php
class MeteoBd{

    var $servidor; //Nombre de la maquina donde se encuentra la BD generalmente es localhost
    var $nombreBD; //Nombre de la Base de Datos
    var $nombreDeUsuario; //Nombre del usuario autorizado para entrar a la Base de Datos
    var $contrasena; //Contraseña del Usuario


    var $enlace;//Almacena el enlace con la Base de Datos una vez establecido
    var $resultado;//Almacena el resultado obtenido por la consulta a la BD
    var $consulta;//Almacena la consulta realizada con el metodo consultaBD();



    //Constructor de la Clase
    //Inicializa algunos atributos Básicos

    function AdaCnxBd($servidor,$nombreBD,$nombreDeUsuario,$contrasena){
        $this->servidor=$servidor;
        $this->nombreBD=$nombreBD;
        $this->nombreDeUsuario=$nombreDeUsuario;
        $this->contrasena=$contrasena;
    }



    //Metodos y Procedimientos
    //conectarBD(); Te permite conectar y enlazar la BD, el enlace a la BD es almacenado modificando el atributo $enlace


    function conectarBD(){
        if($this->enlace=mysql_connect($this->servidor,$this->nombreDeUsuario,$this->contrasena)){

            if(mysql_select_db($this->nombreBD,$enlace)){

                $this->enlace=$enlace;
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

    function consultarBD($sentenciaSQL){

        $this->consulta=mysql_query($sentenciaSQL,$this->enlace);
    }



    //obtenerResultado(); Devuelve los resultados de la Base de Datos

    function Resultado(){

        $this->resultado=mysql_fetch_array($this->consulta);
        return $this->resultado;
    }



    //liberarConsulta(); libera el contenido del atributo que almacena las consultas

    function liberarConsulta(){

        mysql_free_result($this->consulta);
    }



    function insertarRegistro($sentenciaSQL){

        mysql_query($sentenciaSQL,$this->enlace);
    }



    }//Fin de la Clase MeteoBD



//Ejemplo en una pagina cualquiera.

    /*
    <?php

    include("AdaCnxBd.php");

    $objBd=new AdaCnxBd("localhost","MyBD","MyLogin","MyPass");

    $objBd->conectarBD();

    $objBd->consultarBD("select * from MyTable");

    while($row=$objBd->obtenerResultado()){

    printf("%s<br>",$row["nombreDelCampo"]);

    }

    $objBd->terminarConsulta();

    $objBD->desconectarBD();

    ?>
    */
    ?>
    


