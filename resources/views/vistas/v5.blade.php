<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>¡Explora BD Proyect!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        h1, h2, h3 {
            color: #007bff;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tbody tr:nth-child(odd) {
            background-color: #dee2e6;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="container text-center">
        <h1>¡Bienvenid@ al área inasociada!</h1>
        <h2>Descubre los Servicios Desconectados</h2>
        <h3>Explora servicios aún no asociados con áreas de vivienda (por ahora)</h3>

        <div class="row justify-content-center">
            <div class="col-8">
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <th>ID del Departamento</th>
                        <th>Nombre del Servicio</th>
                        <th>Propietario</th>
                        <th>Número de Contacto</th>
                    </thead>
                    <tbody>
                        <?php foreach ($extraservices as $extra) : ?>
                            <tr>
                                <td><?= $extra->id ?></td>
                                <td><?= $extra->name ?></td>
                                <td><?= $extra->owner ?></td>
                                <td><?= $extra->phone ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
