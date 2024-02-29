<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RestablcerContraseña-RITASIPAQUE</title>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
    /* Estilo para el cuadro alrededor del formulario */
    .login-box {
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
    }

    /* Estilo para centrar el título "Iniciar Sesión" */
    h3 {
        text-align: center;
    }

    /* Estilo personalizado para el enlace "Crea tu cuenta" */
    .create-account-link {
        color: #007BFF; /* Cambia el color del enlace a azul */
    }

    .btn-primary {
        color: #fff; /* Cambiamos el color del texto a blanco */
    }

    .help-message-red {
        color: #dc3545; /* Color rojo */
        font-size: 14px;
        margin-top: 5px;
        display: none; /* Por defecto, el mensaje está oculto */
    }

    .help-message-blue {
        /* Estilos del mensaje azul */
        color: #007BFF;
        font-size: 14px;
        margin-top: 5px;
        display: none;
    }

    /* Estilo para el imagen de fondo */
    body {
        background-image: url('assets/images/.jpg'); /* Reemplaza 'ruta_de_la_imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }

    /* Estilo para el cuadro alrededor del formulario */
    .login-box {
        border: 2px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        color: white; /* Cambiar color del texto a blanco */
    }

    /* Estilo para centrar el título "Iniciar Sesión" */
    h3 {
        text-align: center;
        color: white; /* Cambiar color del texto a blanco */
    }

    /* Estilo personalizado para el enlace "Crea tu cuenta" */
    .create-account-link {
        color: white; /* Cambia el color del enlace a azul */
    }

    .btn-primary {
        color: white; /* Cambiamos el color del texto a blanco */
    }

    .btn-info {
        color: white; /* Cambiamos el color del texto a blanco */
    }

    /* Estilo para el imagen de fondo */
    body {
        background-image: url('assets/images/.jpg'); /* Reemplaza 'ruta_de_la_imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
    </style>
</head>
<body class="h-100">
<div class="container-fluid full-bg h-100">
    <div class="container h-100">
        <div class="row no-margin h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="login-box" style="background-image: url('assets/images/fondo.png');">
                    <div class="text-center mb-3">
                        <img src="assets/images/logo2.png" alt="Logo" class="img-fluid">
                    </div>
                
                    <h3 class="text-center">¿Olvidaste tu contraseña?</h3>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <div class="form-group">
                            <label for="inputtexto">Si tienes actualizado tu número de celular en tu perfil de seguridad, podrás reiniciar tu contraseña a través de un mensaje de texto.</label>
                            <label for="inputtexto">Para mayor información comunícate al 1717.</label>
                          
                            
                        </div>


                        <div class="form-group">
                            <label for="inputCodigo">Código</label>
                            <input type="text" class="form-control" id="inputCodigo" name="codigo" placeholder="Código" oninput="validateCode(this);" pattern="[0-9]*" maxlength="10" title="Por favor, ingresa solo números. Máximo 10 caracteres.">
                            <div class="help-message-red"></div>
                        </div>

                        <div class="form-group">
                            <label for="inputUsuario">Usuario</label>
                            <input type="text" class="form-control" id="inputUsuario" name="usuario" placeholder="Usuario" oninput="validateUsername(this);" maxlength="10" title="Por favor, ingresa solo alfanuméricos. Máximo 10 caracteres.">
                            <div class="help-message-red"></div>
                        </div>

                        

                        <div class="form-group text-center">
                        <button type="submit" class="btn btn-info" onclick="return validateForm()"> Recuperar Contraseña </button>

    <!-- Mensaje azul -->
    <div class="help-message-blue" style="color: #007BFF; font-size: 14px; margin-top: 5px; display: none;">
        ERROR, complete todos los campos.
        <button type="button" onclick="closeMessage()" style="background: none; border: none; color: inherit; cursor: pointer;"></button>
    </div>
</div>


                    </form>
                    
                    <!-- Mostrar mensajes de error -->
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <p class="no-c text-center"> <a class="create-account-link" href="login.php"><i class="bi bi-person-fill-add"></i> REGRESAR</a></p>
                </div>
            </div>
        </div>
        <div class="foter-credit">
            
        </div>
    </div>
</div>

<script>
    function validateCode(input) {
        var code = input.value;
        var helpMessage = input.parentElement.querySelector('.help-message-red');

        var numericRegex = /^[0-9]+$/;
       
        if (code.length > 10 || !numericRegex.test(code)) {
            helpMessage.innerText = "Por favor, ingresa solo números. Máximo 10 caracteres.";
            helpMessage.style.display = 'block';
        } else {
            helpMessage.style.display = 'none';
        }
    }

    function validateUsername(input) {
        var username = input.value;
        var helpMessage = input.parentElement.querySelector('.help-message-red');

        var alphanumericRegex = /^[a-zA-Z0-9]+$/;

        if (username.length > 10 || !alphanumericRegex.test(username)) {
            helpMessage.innerText = "Por favor, ingresa solo alfanuméricos. Máximo 10 caracteres.";
            helpMessage.style.display = 'block';
        } else {
            helpMessage.style.display = 'none';
        }
    }

    function validateForm() {
        var codigo = document.getElementById('inputCodigo').value;
        var usuario = document.getElementById('inputUsuario').value;
        var password = document.getElementById('inputPassword').value;
        var helpMessage = document.querySelector('.help-message-blue');

        if (codigo === '' || usuario === '' || password === '') {
            helpMessage.style.display = 'block';
            return false; // Evitar que se envíe el formulario
        } else {
            helpMessage.style.display = 'none';
            return true; // Permitir el envío del formulario
        }
    }
   
   
</script>
</body>
</html>
