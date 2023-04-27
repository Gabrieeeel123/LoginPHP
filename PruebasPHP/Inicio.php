<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="POST">
        <label for="username">Usuario:</label><br>
        <input type="text" name="username" id="username" required size='15'>
        <br>
        <br>
        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" id="password" required size='15 '>
        <br>
        <br>
        <input type="submit" name="submit" value="Iniciar Sesión">
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $pattern = '/^[a-zA-Z0-9]+$/';

            // Validar usuario y contraseña
            if ($username === 'Gabriel123' && $password === 'Gabrieeel123') {
                echo '<h2>Bienvenido, Gabriel123!</h2>';
            } else {
                echo '<p>El nombre de usuario o la contraseña son incorrectos.</p>';
            }

            if(!preg_match($pattern, $username)) {
                echo '<p>El nombre de usuario no puede contener caracteres especiales.</p>';
            }

            if(!preg_match('/^(?=.*[A-Z])(?=.*[0-9]).{8,}$/', $password)) {
                echo '<p>La contraseña debe tener al menos 8 caracteres, una mayúscula y un número.</p>';
            }
            
        }
    ?>
</body>
</html>