<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Niveles academicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-info-subtle">
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body fs-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('/')?>"><i class="bi bi-house"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url('niveles')?>">Niveles académicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('ciudadanos')?>">Ciudadanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('municipios')?>">Municipios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('departamentos')?>">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('regiones')?>">Regiones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <h1 class="text-center mt-2">Niveles</h1>

        <a href="nuevo_nivel" class="btn btn-success"><i class="bi-plus-circle"></i> Nuevo nivel</a>

        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach($datos as $nivel):
              ?>
                <tr>
                    <td><?php echo $nivel['cod_nivel_acad'];?></td>
                    <td><?php echo $nivel['nombre'];?></td>
                    <td><?php echo $nivel['descripcion'];?></td>
                    <td>
                        <a href="<?=base_url('buscar_nivel/').$nivel['cod_nivel_acad']?>" class="btn btn-warning"><i
                                class="bi-pencil-square"></i></a>
                        <a href="<?=base_url('eliminar_nivel/').$nivel['cod_nivel_acad']?>" class="btn btn-danger"><i
                                class="bi-trash"></i></a>
                    </td>
                </tr>
                
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>