<?php include("../template/cabecera.php"); ?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
        </div>
    </div>

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" for="txtID">ID:</label>
            <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
        </div>
        <div class="mb-3">
            <label class="form-label" for="txtNombre">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del libro">
        </div>
        <div class="mb-3">
            <label class="form-label" for="txtNombre">Imagen:</label>
            <input type="file" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del libro">
        </div>
        <div class="btn-group" role="group" aria-label="Button group name">
            <button type="button" class="btn btn-success">Agregar</button>
            <button type="button" class="btn btn-warning">Modificar</button>
            <button type="button" class="btn btn-info">Cancelar</button>
        </div>
    </form>
</div>

<div class="col-md-7">
    Tabla de libros (mostrar datos de los libros)
</div>

<?php include("../template/pie.php"); ?>