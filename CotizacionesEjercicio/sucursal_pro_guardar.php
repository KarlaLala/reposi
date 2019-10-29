<?php
include 'inc/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_de_la_sucursal_post = strtoupper($_POST['nombre_de_sucursal']);
    $direccion_de_la_sucursal_post = strtoupper($_POST['direccion_de_la_sucursal']);
    $telefono_1_post = strtoupper($_POST['telefono_1']);
    $telefono_2_post = strtoupper($_POST['telefono_2']);
    $correo_sucursal_post = strtoupper($_POST['correo_sucursal']);
    $id_sucursal='';
    $ins=$con->prepare("INSERT INTO proveedor VALUES(?,?,?,?,?,?)");
    $ins->bind_param("isssss",$id,$nombre_de_la_sucursal_post,$direccion_de_sucursal_post,$telefono_1_post,$telefono_2_post,$correo_sucursal_post);
    if($ins->execute()){
        echo "Se ha registrado la sucursal";
    }
    else{
        echo "Error al insertar Sucursal";
    }
    $ins->close();
    $con->close();
    /*$nombre_de_la_sucursal_post = strtoupper($_POST['nombre_de_la_sucursal']);
    $direccion_de_la_sucursal_post = strtoupper($_POST['direccion_de_la_sucursal']);
    $telefono_1_post = strtoupper($_POST['telefono_1']);
    $telefono_2_post = strtoupper($_POST['telefono_2']);
    $correo_sucursal_post = strtoupper($_POST['correo_sucursal']);
    
    $ins=$con->query("INSERT INTO proveedor VALUES(NULL,'$nombre_de_la sucursal_post','$direccion_de_la sucursal_post','$telefono_1_post','$telefono_2_post','$correo_sucursal_post')");
    if($ins){
        echo "Sucursal Registrada";
    }
    else{
        echo "NO SE HA EFECTUADO EL REGISTRO";
    }
    $con->close();*/
}
