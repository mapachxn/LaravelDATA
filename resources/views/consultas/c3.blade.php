<!--@foreach($unitServiceDetails as $unitService)
    <p>ID: {{ $unitService->id }}</p>
    <p>Street: {{ $unitService->street }}</p>
    <p>Neighborhood: {{ $unitService->neighborhood }}</p>
    <p>Extra Service Name: {{ $unitService->extra_service_name }}</p>
    <p>Owner: {{ $unitService->owner }}</p>
    <p>Phone: {{ $unitService->phone }}</p>
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
        <h2>Consulta Relacionada 3 (UnitServiceDetails)</h2>
        <h3>Obtener detalles de unidades con información de servicios adicionales y propietarios de esos servicios:</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID de unidad</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Nombre de servicio extra</th>
                        <th>Dueño del servicio</th>
                        <th>Número telefónico</th>
                    </thead>
                    <tbody>
                        <?php foreach ($unitServiceDetails as $unitService) : ?>
                            <tr>
                                <td><?= $unitService->id ?></td>
                                <td><?= $unitService->street ?></td>
                                <td><?= $unitService->neighborhood ?></td>
                                <td><?= $unitService->extra_service_name ?></td>
                                <td><?= $unitService->owner ?></td>
                                <td><?= $unitService->phone ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>