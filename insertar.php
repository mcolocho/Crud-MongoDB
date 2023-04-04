<?php

//require_once "./clases/Conexion.php";
include "../clases/Conexion.php";
include "../clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "_id" => $_POST['_id'],
        "nombre" => $_POST['nombre'],
        "edad" => $_POST['edad'],
        "signo" => $_POST['signo'],
        "genero" => $_POST['genero']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if($respuesta->getInsertedId() >  0) {
        header("location:../index.php");
    } else 
    {
        print_r($respuesta);
    }


/*require_once "./Conexion.php";
require_once "./clases/Crud.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = array(
        "_id" => $_POST["_id"],
        "nombre" => $_POST["nombre"],
        "edad" => $_POST["edad"],
        "signo" => $_POST["signo"],
        "genero" => $_POST["genero"]
    );
    $Crud = new Crud();
    $resultado = $crud->agregarDatos($datos);

    if (is_string($resultado)) {
        echo "Ha ocurrido un error al intentar agregar el registro: " . $resultado;
    } else {
        echo "El registro se ha agregado correctamente";
    }
} else {
    echo "No se han recibido datos";
}*/


    /*print_r($_POST);
    if(empty($_POST["txtId"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtSigno"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'clases/Conexion.php';
    require_once "./clases/crud.php";
    $_id = $_POST["txt_Id"];
    $nombre = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $signo = $_POST["txtSigno"];
    $genero = $_POST["txtGenero"];
    
    $sentencia = $bd->prepare("INSERT INTO estudiantes(_id,nombre,edad,signo,genero) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$_id,$nombre,$edad,$signo, $genero]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }*/

?>
