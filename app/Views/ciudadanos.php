<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('niveles');?>">Niveles académicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url('ciudadanos');?>">Ciudadanos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('municipios');?>">Municipios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('departamentos');?>">Departamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('regiones');?>">Regiones</a>
            </li>
        </ul>
        <h1 class="text-center">Ciudadanos</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>DPI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono casa</th>
                    <th>Teléfono móvil</th>
                    <th>E-mail</th>
                    <th>Fecha de nacimiento</th>
                    <th>Código de nivel academico</th>
                    <th>Codigo de municipio</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach($datos as $ciudadano):
              ?>
                <tr>
                    <td><?php echo $ciudadano['dpi'];?></td>
                    <td><?php echo $ciudadano['apellido'];?></td>
                    <td><?php echo $ciudadano['nombre'];?></td>
                    <td><?php echo $ciudadano['direccion'];?></td>
                    <td><?php echo $ciudadano['tel_casa'];?></td>
                    <td><?php echo $ciudadano['tel_movil'];?></td>
                    <td><?php echo $ciudadano['email'];?></td>
                    <td><?php echo $ciudadano['fechanac'];?></td>
                    <td><?php echo $ciudadano['cod_nivel_acad'];?></td>
                    <td><?php echo $ciudadano['cod_muni'];?></td>
                    <td><?php echo $ciudadano['contra'];?></td>
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