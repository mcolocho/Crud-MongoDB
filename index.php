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
                    <h2>Crud con MongoDB y PHP</h2>
                    <a href="./agregar.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus"></i> Agregar nuevo registro
                    </a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Carrera</th>
                            <th>Género</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datos as $item) {
                            ?>
                                <tr>
                                    <td><?php echo $item->_id ?></td>
                                    <td><?php echo $item->nombre ?></td>
                                    <td><?php echo $item->edad ?></td>
                                    <td><?php echo $item->signo ?></td>
                                    <td><?php echo $item->genero ?></td>
                                    <td class="text-center">
                                        <form action="./actualizar.php" method="post">
                                            <button class="btn btn-warning">
                                                <i class="fa-solid fa-user-pen"></i> Editar
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="./eliminar.php" method="post">
                                            <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-user-minus"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>