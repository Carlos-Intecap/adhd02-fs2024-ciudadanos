<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar ciudadano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-info-subtle">
    <div class="container col-xl-3">
        <h1 class="text-center mt-2">Agregar ciudadano</h1>
        <form action="agregar_ciudadano" method="post">
            <div class="mb-8">
                <label for="txtDpi" class="form-label">DPI</label>
                <input type="number" id="txtDpi" name="txtDpi" class="form-control" placeholder="Ingrese DPI">
            </div>
            <div class="mb-8">
                <label for="txtApellido" class="form-label">Apellido</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese apellido">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre">
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Dirección</label>
                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese dirección">
            </div>
            <div class="mb-8">
                <label for="txtTelCasa" class="form-label">Teléfono de casa</label>
                <input type="number" id="txtTelCasa" name="txtTelCasa" class="form-control" placeholder="Ingrese teléfono de casa">
            </div>
            <div class="mb-8">
                <label for="txtTelMovil" class="form-label">Teléfono movil</label>
                <input type="number" id="txtTelMovil" name="txtTelMovil" class="form-control" placeholder="Ingrese teléfono movil">
            </div>
            <div class="mb-8">
                <label for="txtEmail" class="form-label">Correo</label>
                <input type="text" id="txtEmail" name="txtEmail" class="form-control" placeholder="Ingrese correo electronico">
            </div>
            <div class="mb-8">
                <label for="txtFechanac" class="form-label">Fecha de nacimiento</label>
                <input type="date" id="txtFechanac" name="txtFechanac" class="form-control" placeholder="Ingrese fecha de nacimiento">
            </div>
            <div class="mb-8">
                <label for="txtCodNivelAcad" class="form-label">Código de nivel academico</label>
                <input type="number" id="txtCodNivelAcad" name="txtCodNivelAcad" class="form-control" placeholder="Ingrese código de nivel academico">
            </div>
            <div class="mb-8">
                <label for="txtCodMuni" class="form-label">Código de municipio</label>
                <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control" placeholder="Ingrese municipio">
            </div>
            <div class="mb-8">
                <label for="txtContra" class="form-label">Contraseña</label>
                <input type="password" id="txtContra" name="txtContra" class="form-control" placeholder="Ingrese contraseña">
            </div>
            <div class="mb-8">
                <input type="submit" class="btn btn-success form control mt-2" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>