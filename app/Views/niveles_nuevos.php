<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar nivel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-info-subtle">
    <div class="container col-xl-3">
        <h1 class="text-center mt-2">Agregar nivel</h1>
        <form action="agregar_nivel" method="post">
            <div class="mb-8">
                <label for="txtCodNivel" class="form-label">Código de nivel academico</label>
                <input type="number" id="txtCodNivel" name="txtCodNivel" class="form-control" placeholder="Ingrese código">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre">
            </div>
            <div class="mb-8">
                <label for="txtDescripcion" class="form-label">Descripción</label>
                <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" placeholder="Ingrese descripción">
            </div>
            <div class="mb-8">
                <input type="submit" class="btn btn-success form-control mt-2" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>