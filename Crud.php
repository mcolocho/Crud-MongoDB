<?php

//require_once "./Conexion.php";

class crud extends Conexion {
    public function mostrarDatos(){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->estudiantes;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerDocumento($id){
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->estudiantes;
            $datos= $coleccion->findOne(array('_id'=>new MongoDB\BSON\ObjectId($id)));
            return $datos;
        }catch (\Throwable $th){
            return $th->getMessage();
        }
    }

    public function insertarDatos($datos){
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->estudiantes;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /*public function agregarDatos($datos){
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->estudiantes;
            $coleccion->insertOne($datos);
            return "Registro agregado correctamente";
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }*/

}

?>