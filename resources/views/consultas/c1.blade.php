<!--@foreach($unitDetails as $unit)
    <p>ID: {{ $unit->id }}</p>
    <p>Street: {{ $unit->street }}</p>
    <p>Neighborhood: {{ $unit->neighborhood }}</p>
    <p>Rooms: {{ $unit->rooms }}</p>
    <p>Bathrooms: {{ $unit->bathrooms }}</p>
    <p>Extra Service Name: {{ $unit->extra_service_name }}</p>
    <hr>
@endforeach-->

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
        <h2>Consulta Relacionada 1 (UnitDetails)</h2>
        <h3>Obtener detalles de unidades con información de apartamentos y servicios adicionales:</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID de unidad</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Cuartos</th>
                        <th>Baños</th>
                        <th>Servicio Extra</th>
                    </thead>
                    <tbody>
                        <?php foreach ($unitDetails as $unit) : ?>
                            <tr>
                                <td><?= $unit->id ?></td>
                                <td><?= $unit->street ?></td>
                                <td><?= $unit->neighborhood ?></td>
                                <td><?= $unit->rooms ?></td>
                                <td><?= $unit->bathrooms ?></td>
                                <td><?= $unit->extra_service_name ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>