<?php include "./header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                    <i class="fa-solid fa-angles-left"></i> Regresar
                    </a></br></br>
                    
                    <h2>Actualizar Registro</h2>

                    <form action="" method="post">
                        <label for="_id">Id</label>
                        <input type="text" class="form-control" id="_id" name="_id" require>
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad">
                        <label for="signo">Carrera</label>
                        <input type="text" class="form-control" id="signo" name="signo">
                        <label for="genero">Género</label>
                        <input type="text" class="form-control" id="genero" name="genero">
                        <button class="btn btn-warning mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Actualzar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>