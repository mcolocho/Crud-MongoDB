<?php

require_once "./clases/Conexion.php";
require_once "./clases/Crud.php";
$crud = new crud();
$datos = $crud->mostrarDatos();
?>

<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                    </a></br></br>
                    
                    <h2>Agregar Nuevo Registro</h2>

                    <form action="./procesos/insertar.php" method="post">
                        <label for="_id">Id</label>
                        <input type="text" class="form-control" id="_id" name="_id" require>

                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" require>

                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" require>

                        <label for="signo">Carrera</label>
                        <input type="text" class="form-control" id="signo" name="signo" require>

                        <label for="genero">Género</label>
                        <input type="text" class="form-control" id="genero" name="genero" require>

                        <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>

