<?php
require_once('../Config/cls_conexion.model.php');
Class Clase_Proyecto
{
    public function todos()
    {
        try{
        $con = new Clase_Conectar_Base_Datos();
        $con = $con->ProcedimientoConectar(); 
        $cadena = "SELECT * FROM `proyectos`";
        $result = mysqli_query($con,$cadena);
        return $result;
    }catch (Throwable $th)
    {
        return $th ->getMessage();
    }finally{
        $con -> close();
    }
}
public function uno($ID_proyecto)
{
    try{
    $con = new Clase_Conectar_Base_Datos();
    $con = $con->ProcedimientoConectar(); 
    $cadena = "SELECT * FROM `proyectos` WHERE `ID_proyecto` = $ID_proyecto";
    $result = mysqli_query($con,$cadena);
    return $result;
}catch (Throwable $th){
    return $th ->getMessage();
}finally{
    $con -> close();
}
}

public function insertar($ID_empleado_responsable,$Nombre)
    {
        try{
        $con = new Clase_Conectar_Base_Datos();
        $con = $con->ProcedimientoConectar(); 
        $cadena = "INSERT INTO `proyectos`(`ID_empleado_responsable`, `Nombre`, `Fecha_inicio`, `Fecha_fin`) VALUES ($ID_empleado_responsable ,'$Nombre',NOW(),NOW())";
        $result = mysqli_query($con,$cadena);
        return 'ok';
    }catch (Throwable $th){
        return $th ->getMessage();
    }finally{
        $con -> close();
    }
    }
    public function actualizar($ID_proyecto,$ID_empleado_responsable ,$Nombre)
    {
        try{
        $con = new Clase_Conectar_Base_Datos();
        $con = $con->ProcedimientoConectar(); 
        $cadena = "UPDATE `proyectos` SET `ID_empleado_responsable`=$ID_empleado_responsable ,`Nombre`='$Nombre' WHERE `ID_proyecto`=$ID_proyecto";
        $result = mysqli_query($con,$cadena);
        return 'ok';
    }catch (Throwable $th){
        return $th ->getMessage();
    }finally{
        $con -> close();
    }
    }
    public function eliminar($ID_proyecto)
    {
        try{
        $con = new Clase_Conectar_Base_Datos();
        $con = $con->ProcedimientoConectar(); 
        $cadena = "DELETE FROM `proyectos` WHERE `ID_proyecto`=$ID_proyecto";
        $result = mysqli_query($con,$cadena);
        return 'ok';
    }catch (Throwable $th){
        return $th ->getMessage();
    }finally{
        $con -> close();
    }
    }

}