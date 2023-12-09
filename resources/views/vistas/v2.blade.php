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
            background-color: #f9fafc;
            color: #444;
        }

        h1, h2, h3 {
            color: #007bff;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #edf2f9;
        }

        tbody tr:nth-child(odd) {
            background-color: #e1edf9;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="container text-center">
        <h1>¡Bienvenido a la sección de usuarios de la página!</h1>
        <h2>Acerca del usuario</h2>
        <h3>👤 Vista que muestra la información del usuario junto con los detalles de su perfil 👁️</h3>

        <div class="row justify-content-center">
            <div class="col-8">
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <th>ID del Usuario</th>
                        <th>Nombre de Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Tipo de Perfil</th>
                        <th>Descripción</th>
                    </thead>
                    <tbody>
                        <?php foreach ($usersinfo as $userinfo) : ?>
                            <tr>
                                <td><?= $userinfo->id ?></td>
                                <td><?= $userinfo->username ?></td>
                                <td><?= $userinfo->name ?></td>
                                <td><?= $userinfo->lastname ?></td>
                                <td><?= $userinfo->profile ?></td>
                                <td><?= $userinfo->description ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
