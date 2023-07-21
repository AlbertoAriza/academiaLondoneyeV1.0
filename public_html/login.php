<?php
require_once 'includes/dbconn.php';
$statement = $pdo->query("select * from alumno");
$member = $statement->fetch();
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
                <form action="includes/login.include.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="userEmail" id="" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="userPassword" id="" required>
                        <label for="">Password</label>
                    </div>

                    <!-- CHECK RECUERDAME & RECORDAR PASSWORD -->
                    <div class="forget">
                        <label for="recuerdame"><input type="checkbox" name="userRecuerdame" id="recuerdame">Recuerdame </label>
                        <a class="forgotten" href="#">Olvidé mi password</a>
                    </div>

                    <!-- BOTÓN LOGUEO -->
                    <button class="btn_generico" type="submit" name="submit">Acceder</button>

                    <!-- REGISTRO - si no se tiene una cuenta -->
                    <div class="register">
                        <p>Aún no tengo una cuenta <a href="register.php">Crear cuenta</a></p>
                    </div>
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