<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
body {
  background-image: url('https://media.drive.com.au/obj/tx_q:50,rs:auto:1920:1080:1/caradvice/private/aae267a6b7edd3532c3d49f1971a198f');
}
.card {
    background-color: rgba(0, 0, 0, 0.8);
}
h1 {
    color: white;
    margin: 30px 0;
}
.card-body {
    font-size: 200px;
    color: white;
}
.card-body:hover {
    color: rgb(125, 125, 125);
}
</style>

<body class="bg-info-subtle">

    <div class="container text-center">
    <h1>Ciudadanos</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <a href="niveles" class="col text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Niveles</h5>
                        <i class="bi bi-book"></i>
                    </div>
                </div>
            </a>
            <a href="ciudadanos" class="col  text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ciudadanos</h5>
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
            </a>
            <a href="municipios" class="col text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Municipios</h5>
                        <i class="bi bi-map"></i>
                    </div>
                </div>
            </a>
            <a href="departamentos" class="col text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Departamentos</h5>
                        <i class="bi bi-map-fill"></i>
                    </div>
                </div>
            </a>
            <a href="regiones" class="col text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Regiones</h5>
                        <i class="bi bi-geo-fill"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>