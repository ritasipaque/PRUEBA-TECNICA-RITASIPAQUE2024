<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTINUIDAD DE PROCESO </title>
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
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Información de Transferencia</h5>
            </div>
            <div class="card-body">
                <form action="procesar_informacion.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nit">NIT:</label>
                        <input type="text" class="form-control" id="nit" name="nit" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="correo" name="correo">
                    </div>
                    <div class="form-group">
                        <label for="relacion_beneficiario">Relación con el Beneficiario:</label>
                        <input type="text" class="form-control" id="relacion_beneficiario" name="relacion_beneficiario">
                    </div>
                    <div class="form-group">
                        <label for="motivo_transferencia">Motivo de la Transferencia:</label>
                        <textarea class="form-control" id="motivo_transferencia" name="motivo_transferencia" rows="4" maxlength="600"></textarea>
                    </div>
                    <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Información de Transferencia</h5>
                <div class="form-group">
                        <label for="intermediario">Banco Intermediario:</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="intermediario" id="swift" value="swift" required>
                            <label class="form-check-label" for="swift">SWIFT</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="intermediario" id="aba" value="aba" required>
                            <label class="form-check-label" for="aba">ABA</label>
                        </div>
                



            </div>




                    <button type="submit" class="btn btn-info">VALIDAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>