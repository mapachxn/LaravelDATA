<!--@foreach($userDetails as $user)
    <p>ID: {{ $user->id }}</p>
    <p>Username: {{ $user->username }}</p>
    <p>Profile: {{ $user->profile }}</p>
    <p>Description: {{ $user->description }}</p>
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
        <h2>Consulta Relacionada 2 (UserDetails)</h2>
        <h3>Obtener detalles de usuarios con información de su tipo de perfil:</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID de ususario</th>
                        <th>Nombre de usuario</th>
                        <th>Tipo de perfil</th>
                        <th>Descripción del perfil</th>
                    </thead>
                    <tbody>
                        <?php foreach ($userDetails as $user) : ?>
                            <tr>
                                <td><?= $user->id ?></td>
                                <td><?= $user->username ?></td>
                                <td><?= $user->profile ?></td>
                                <td><?= $user->description ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>