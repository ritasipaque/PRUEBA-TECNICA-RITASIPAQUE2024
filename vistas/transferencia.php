<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSFERENCIA LOCAL</title>
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
    <h2>Transferencias Locales</h2>

    <form>
    <div class="mb-3">
        <label for="cuentaOrigen" class="form-label">Cuenta a Debitar</label>
        <select class="form-select" id="cuentaOrigen">
            <option>Seleccionar</option>
            <option>BI 00000029022024 Q/OSCAR FERNANDO LOPEZ CASTILLO</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="cuentaDestino" class="form-label">Cuenta a Creditar</label>
        <select class="form-select" id="cuentaDestino">
            <option>Seleccionar</option>
            <option>BI 7802786673654 $/ANGELICA MOLINA FUENTES</option>
            <option>BI 9996664448660 $/PEDRO PABLO GOMEZ CAAL</option>
            <option>BI 1045123299688 $/ROMEH ADRIANO TEJEDA BRUNO</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="monto" class="form-label">Tasa de Cambio 29/02/2024 </label>
        <input type="text" class="form-control" id="tasaCambio" value="7.81768" readonly>
    </div>

    <div class="mb-3">
        <label for="montoDebitar" class="form-label">Monto a Debitar (Quetzales)</label>
        <input type="number" class="form-control" id="montoDebitar" placeholder="Ingrese el monto en quetzales" oninput="convertir('debitar')">
    </div>
    <div class="mb-3">
        <label for="montoAcreditar" class="form-label">Monto a Acreditar (Dólares)</label>
        <input type="number" class="form-control" id="montoAcreditar" placeholder="Ingrese el monto en dólares" oninput="convertir('acreditar')">
    </div>
    <div class="mb-3">
        <label for="comentario" class="form-label">Comentario (Máximo 600 caracteres)</label>
        <textarea class="form-control" id="comentario" rows="5" maxlength="600" placeholder="Ingrese su comentario aquí" oninput="checkLength()"></textarea>
        <div id="mensajeLimite" class="form-text text-danger" style="display: none;">Has alcanzado el límite de 600 caracteres.</div>
    </div>
    <button type="submit" class="btn btn-primary">Continuar</button>
</form>

<script>
    function convertir(tipo) {
        let tasaCambio = parseFloat(document.getElementById('tasaCambio').value);
        let montoDebitar = parseFloat(document.getElementById('montoDebitar').value);
        let montoAcreditar = parseFloat(document.getElementById('montoAcreditar').value);

        if (tipo === 'debitar') {
            if (!isNaN(montoDebitar)) {
                document.getElementById('montoAcreditar').value = (montoDebitar / tasaCambio).toFixed(2);
            }
        } else if (tipo === 'acreditar') {
            if (!isNaN(montoAcreditar)) {
                document.getElementById('montoDebitar').value = (montoAcreditar * tasaCambio).toFixed(2);
            }
        }

        function checkLength() {
        var comentario = document.getElementById('comentario');
        var mensajeLimite = document.getElementById('mensajeLimite');
        
        if (comentario.value.length >= 600) {
            mensajeLimite.style.display = 'block';
        } else {
            mensajeLimite.style.display = 'none';
        }
    }



    }
</script>

    
</div>

   







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
