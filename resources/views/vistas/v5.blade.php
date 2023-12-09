<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD Proyect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <h1></h1>
    <div class="container text-center">
        <h2>Servicios no asociados</h2>
        <h3>Vista que muestra que servicios aún no están asociados a ningún area de vivienda</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID del Departamento</th>
                        <th>Nombre del servicio</th>
                        <th>Dueño del servicio</th>
                        <th>Número telefónico</th>
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