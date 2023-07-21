<?php

declare(strict_types=1);                               // Use strict types
use AcademiaLondonEye\Validate\Validate;               // Import Validate class

include '../src/bootstrap.php';
$alumno = [];
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alumno['nombre'] = $_POST['nombre'];
    $alumno['apellidos'] = $_POST['apellidos'];
    $alumno['email'] = $_POST['email'];
    $alumno['password'] = $_POST['password'];
    $confirm_password = $_POST['rpassword'];

    // Validate form data
    $errors['nombre'] = Validate::isText($alumno['nombre'], 1, 254)
        ? '' : 'nombre must be 1-254 characters';
    $errors['apellidos']  = Validate::isText($alumno['apellidos'], 1, 254)
        ? '' : 'Surname must be 1-254 characters';
    $errors['email']    = Validate::isEmail($alumno['email'])
        ? '' : 'Please enter a valid email';
    $errors['password'] = Validate::isPassword($alumno['password'])
        ? '' : 'Passwords must be at least 8 characters and have:<br> 
                A lowercase letter<br>An uppercase letter<br>A number 
                <br>And a special character';
    $errors['confirm']  = ($alumno['password'] = $confirm)
        ? '' : 'Passwords do not match';
    $invalid            = implode($errors);                  // Join error messages

    if (!$invalid) {                                         // If no errors
        $result = $cms->getAlumno()->create($alumno);        // Create alumno
        echo "cuenta creada";
        if ($result === false) {                             // If result is false
            $errors['email'] = 'Email address already used'; // Store a warning
        } else {
            echo "cuenta creada";                                      // Otherwise send to login
            redirect('login.php', ['success' => 'Thanks for joining! Please log in.']);
        }
    }
}

$data['member']     = $alumno;                               // Member data
$data['errors']     = $errors;                               // Error messages
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--LINK PARA INSERTAR FAVICON-->
    <link rel="shortcut icon" href="imgs/favicon-128x128.png" type="image/x-icon" />

    <!--LINKS A LAS PÁGINAS DE ESTILOS CSS-->
    <link rel="stylesheet" href="style/estilosgenerales.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/formulario.css">

    <!--TÍTULO DE LA PÁGINA (APARECE EN EL NAVEGADOR ARRIBA)-->
    <title>LondonEye - Tu Academia de Inglés Online</title>
</head>

<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <main>
        <div class="form-box">
            <div class="form-value">
                <form action="includes/register.include.php" method="POST">
                    <h2>Nuevo Registro</h2>

                    <!-- NOMBRE -->
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="nombre" id="" required>
                        <label for="">Nombre</label>
                    </div>

                    <!-- APELLIDOS -->
                    <div class="inputbox">
                        <ion-icon name="people-outline"></ion-icon>
                        <input type="text" name="apellidos" id="" required>
                        <label for="">Apellidos</label>
                    </div>

                    <!-- EMAIL -->
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" id="" required>
                        <label for="">Email</label>
                    </div>

                    <!-- PASSWORD -->
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="" required>
                        <label for="">Password</label>
                    </div>

                    <!-- REPEAT PASSWORD -->
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="repeatPassword" id="" required>
                        <label for="">Repetir password</label>
                    </div>

                    <!-- ACEPTAR CONDICIONES -->
                    <div class="forget">
                        <label for=""><input type="checkbox" name="terms" id="" value="true">Acepto las <a href="#">Condiciones de uso</a> y <a href="#">política de privacidad</a></label>
                    </div>

                    <!-- SUBMIT BTN -->
                    <button id="btn_register" class="btn_generico">Acceder</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <?php include 'includes/footer.php' ?>
    </footer>
    <!-- SCRIPT PARA INSERTAR ICONOS DE IONICONS.IO -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>