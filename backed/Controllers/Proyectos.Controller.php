<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "OPTIONS") {
    die();
}

require_once ('../Models/Proyectos.Model.php');
$Proyectos = new Clase_Proyecto();

switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $Proyectos->todos();
        while ($fila = mysqli_fetch_assoc($datos)){
            $todos[] = $fila;
        }
        echo json_encode($todos);
        break;
        case 'uno':
        $ID_proyecto = $_POST["ID_proyecto"]; 
        $datos = array(); 
        $datos = $Proyectos->uno($ID_proyecto); 
        $uno = mysqli_fetch_assoc($datos); 
        echo json_encode($uno); 
        break;
        case 'insertar':    
            $ID_empleado_responsable  = $_POST["ID_empleado_responsable"];
            $Nombre = $_POST["Nombre"];
            $datos = array();
            $datos = $Proyectos->insertar($ID_empleado_responsable,$Nombre);
            echo json_encode($datos);
            break;
    case 'actualizar':
        $ID_proyecto = $_POST["ID_proyecto"];
        $ID_empleado_responsable  = $_POST["ID_empleado_responsable"];
        $Nombre = $_POST["Nombre"];
        
        $datos = array();
        $datos = $Proyectos->actualizar($ID_proyecto, $ID_empleado_responsable, $Nombre);
        echo json_encode($datos);
        break;
        case 'eliminar':
            $ID_proyecto = $_POST["ID_proyecto"];
            $datos = array();
            $datos = $Proyectos->eliminar($ID_proyecto);
            echo json_encode($datos);
            break;
    }