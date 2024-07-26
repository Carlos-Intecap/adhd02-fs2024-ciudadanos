<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-info-subtle">
    <div class="container col-xl-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Modificar Ciudadano</h1>
                <form action="<?=base_url('modificar_ciudadano')?>" method="post">
                    <div class="mb-3">
                        <label for="txtDpi" class="form-label">DPI</label>
                        <input type="number" id="txtDpi" name="txtDpi" class="form-control" placeholder="Ingrese DPI"
                            value="<?=$datos['dpi']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                            placeholder="Ingrese apellido" value="<?=$datos['apellido']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese nombre" value="<?=$datos['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label">Dirección</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control"
                            placeholder="Ingrese dirección" value="<?=$datos['direccion']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelCasa" class="form-label">Teléfono de casa</label>
                        <input type="number" id="txtTelCasa" name="txtTelCasa" class="form-control"
                            placeholder="Ingrese teléfono de casa" value="<?=$datos['tel_casa']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelMovil" class="form-label">Teléfono movil</label>
                        <input type="number" id="txtTelMovil" name="txtTelMovil" class="form-control"
                            placeholder="Ingrese teléfono movil" value="<?=$datos['tel_movil']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Correo</label>
                        <input type="text" id="txtEmail" name="txtEmail" class="form-control"
                            placeholder="Ingrese correo electronico" value="<?=$datos['email']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtFechanac" class="form-label">Fecha de nacimiento</label>
                        <input type="date" id="txtFechanac" name="txtFechanac" class="form-control"
                            placeholder="Ingrese fecha de nacimiento" value="<?=$datos['fechanac']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodNivelAcad" class="form-label">Código de nivel academico</label>
                        <input type="number" id="txtCodNivelAcad" name="txtCodNivelAcad" class="form-control"
                            placeholder="Ingrese código de nivel academico" value="<?=$datos['cod_nivel_acad']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodMuni" class="form-label">Código de municipio</label>
                        <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control"
                            placeholder="Ingrese municipio" value="<?=$datos['cod_muni']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtContra" class="form-label">Contraseña</label>
                        <input type="password" id="txtContra" name="txtContra" class="form-control"
                            placeholder="Ingrese contraseña" value="<?=$datos['contra']?>">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-success form-control mt-2" value="Guardar cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>