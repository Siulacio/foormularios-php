<html lang="es">
<head>
    <title>Formulario de contactato</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        form {
            width: 400px;
            margin: 0 auto;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            width: 100px;
            margin: 0 auto;
            display: block;
            background: #333;
            color: #fff;
            border: 0;
            cursor: pointer;
        }
        .errors {
            width: 400px;
            margin: 0 auto;
            background: #f00;
            color: #fff;
            padding: 10px;
        }
        .success {
            width: 400px;
            margin: 0 auto;
            background: #0f0;
            color: #fff;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!--  si hay un error lo mostramos  -->
    <?php if (isset($_GET['error'])): ?>
        <div class="errors">
            <?php if ($_GET['error'] == 1): ?>
                <p>Por favor, rellena todos los campos.</p>
            <?php elseif ($_GET['error'] == 2): ?>
                <p>Por favor, introduce un email válido.</p>
            <?php elseif ($_GET['error'] == 3): ?>
                <p>Ha ocurrido un error al enviar el email.</p>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- si el email se ha enviado correctamente -->
    <?php if (isset($_GET['success'])): ?>
        <div class="success">
            <p>El email se ha enviado correctamente.</p>
        </div>
    <?php endif; ?>

    <form action="procesar.php" method="post">
        Nombre: <input type="text" name="nombre" /><br />
        Email: <input type="text" name="email" value="" /><br />
        Mensaje: <textarea name="mensaje"></textarea><br />
        <input type="submit" value="Enviar" />
    </form>

</body>
</html>

