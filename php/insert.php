<?php


$nombre=$_POST['nombre'];
$rut=$_POST['rut'];
$correo=$_POST['correo'];
$receta=$_POST['receta'];




if(isset($nombre)&&isset($correo)&&isset($rut)&&isset($receta)){
    
    
    
    if(insert($nombre,$rut,$correo,$receta)){
         $jsondata["success"] = true;  
    }else{
        
         $jsondata["success"] = false;
         $jsondata["data"] = array('message' => 'No se pudo ingresar dato en la DB:'+ mysqli_error($conection));
        // die('Consulta no válida: ' . mysqli_error($conection));
    }
    
    
  
header('Content-type: application/json; charset=utf-8');
echo json_encode((object)$jsondata);  
    
}



function insert($nombre,$rut,$correo,$receta)
{
     include 'connect.php';
     $consulta="INSERT INTO tatariales_users (nombre,rut,correo,receta) VALUES ('$nombre','$rut','$correo','$receta')";
     $resultado = mysqli_query($conection,$consulta);
    
    if (!$resultado) {
       // die('Consulta no válida: ' . mysqli_error($conection));
        return false;
    }else{
        return true;
    }


}


?>