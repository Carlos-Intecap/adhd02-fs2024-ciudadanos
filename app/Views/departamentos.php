<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ver_niveles');?>">Niveles académicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ver_ciudadanos');?>">Ciudadanos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ver_municipios');?>">Municipios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('ver_departamentos');?>">Departamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('ver_regiones');?>">Regiones</a>
            </li>
        </ul>
        <h1 class="text-center">Departamentos</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Código de departamento</th>
                    <th>Nombre</th>
                    <th>Código de región</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach($datos as $departamento):
              ?>
                <tr>
                    <td><?php echo $departamento['cod_depto'];?></td>
                    <td><?php echo $departamento['nombre_depto'];?></td>
                    <td><?php echo $departamento['cod_region'];?></td>
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