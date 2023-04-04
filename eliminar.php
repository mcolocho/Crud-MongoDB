
<?php 
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>



<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                    </a></br></br>
                    
                    <h2>Eliminar Registro</h2>

                    <table class="table table-sm table-hover table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Carrera</th>
                            <th>Género</th>
                        </thead>
                        <tbody>
                             <tr>
                                s<td><?php echo $datos->_id; ?></td>
                                <td><?php echo $datos->nombre; ?></td>
                                <td><?php echo $datos->edad; ?></td>
                                <td><?php echo $datos->signo; ?></td>
                                <td><?php echo $datos->genero; ?></td>
                                    <div class="alert alert-danger" role="alert">
                                        <p>¿Está seguro de elimiar este registro?</p>
                                        <p>Una vez elminado no podrá ser recuperado!</p>
                                    </div>
                                <td class="text-center">
                                    <form action="" method="post">
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>