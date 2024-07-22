<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar municipio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Agregar municipio</h1>
        <form action="agregar_municipio" method="post">
            <div class="mb-8">
                <label for="txtCodMuni" class="form-label">Código de municipio</label>
                <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control" placeholder="Ingrese código de municipio">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre del municipio">
            </div>
            <div class="mb-8">
                <label for="txtCodDepto" class="form-label">Código del departamento</label>
                <input type="number" id="txtCodDepto" name="txtCodDepto" class="form-control" placeholder="Ingrese nombre del departamento">
            </div>
            <div class="mb-8">
                <input type="submit" class="btn btn-primary" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>