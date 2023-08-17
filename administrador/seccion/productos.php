<?php include("../template/cabecera.php"); ?>

<div class="col-md-5">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label" for="txtID">ID:</label>
            <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
        </div>
        <div class="mb-3">
            <label class="form-label" for="txtNombre">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del libro">
        </div>
        <div class="mb-3">
            <label class="form-label" for="txtNombre">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del libro">
        </div>
        <button type="submit" class="btn btn-primary">Entrar al Administrador</button>
    </form>
</div>

<div class="col-md-7">
    Tabla de libros (mostrar datos de los libros)
</div>

<?php include("../template/pie.php"); ?>