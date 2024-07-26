<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-info-subtle">
    <div class="container col-xl-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Modificar Municipio</h1>
                <form action="<?=base_url('modificar_municipio')?>" method="post">
                    <div class="mb-3">
                        <label for="txtCodMuni" class="form-label">Código de municipio</label>
                        <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control"
                            placeholder="Ingrese código de municipio" value="<?=$datos['cod_muni'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese nombre del municipio" value="<?=$datos['nombre_municipio'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodDepto" class="form-label">Código del departamento</label>
                        <input type="number" id="txtCodDepto" name="txtCodDepto" class="form-control"
                            placeholder="Ingrese código del departamento" value="<?=$datos['cod_depto'];?>">
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