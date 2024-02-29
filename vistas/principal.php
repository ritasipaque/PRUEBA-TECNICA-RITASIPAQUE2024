<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo personalizado para el menú */
        #navbar {
            background-color: #007bff; /* Color azul */
        }

        /* Estilo para cambiar el color del texto del menú */
        #navbar .nav-link {
            color: #fff; /* Color blanco */
        }

        /* Estilo para resaltar el ítem activo del menú */
        #navbar .nav-item.active .nav-link {
            font-weight: bold; /* Texto en negrita */
        }
    </style>
</head>
<body>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
<img class="max-200" src="assets/images/logo3.PNG" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Gestiones <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Seguridad</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Configuración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h2>Bienvenido BANCA en linea</h2>
    <p>RITA MARIA SIPAQUE ZIL</p>
    <img class="max-200" src="assets/images/logo4.PNG" alt="">
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
