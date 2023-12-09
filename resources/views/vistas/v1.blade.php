<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD Proyect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
            color: #333;
        }

        h1, h2, h3 {
            color: #007bff;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        tbody tr:nth-child(odd) {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="container text-center">
        <h1>¡Bienvenido a BD Proyect!</h1>
        <h2>🛏️ Recámaras y sanitarios 🚽</h2>
        <h3>Explora la cantidad de recámaras y sanitarios en nuestros departamentos</h3>

        <div class="row justify-content-center">
            <div class="col-8">
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <th>Cuartos</th>
                        <th>Baños</th>
                    </thead>
                    <tbody>
                        <?php foreach ($apartments as $apartment) : ?>
                            <tr>
                                <td><?= $apartment->rooms ?></td>
                                <td><?= $apartment->bathrooms ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
