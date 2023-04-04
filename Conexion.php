<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "./crud_mongo/vendor/autoload.php";

class Conexion
{
    public function conectar()
    {
        try {
            $servidor = "localhost";
            $usuario = "mongoadmin";
            $password = "123456";
            $baseDatos = "crud";
            $puerto = "27017";


            $cadenaConexion = "mongodb://" .
                $usuario . ":" .
                $password . "@" .
                $servidor . ":" .
                $puerto . "/" .
                $baseDatos;

            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}

$objeto = new Conexion();
//var_dump($objeto->conectar());  ver objetos de la BD

/* Para hacer pruebas de conexión
mongo -u  mongoadmin -p 123456 --authenticationDatabase crud
mongodb://mongoadmin:123456@localhost:27017/?authMechanism=DEFAULT&authSource=crud */
/*
db.createUser({
    user: "mongoadmin",
    pwd: "123456",
    roles: [
        { role: "readWrite", db: "crud" },
        { role: "userAdminAnyDatabase", db: "admin" },
        { role: "dbAdminAnyDatabase", db: "admin" },
        { role: "clusterAdmin", db: "admin" }
    ]
});

*/

?>


