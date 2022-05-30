<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario 1</title>
</head>
<body>
    <!-- En action se especifica la página a la que se envía
         En method se especifica el tipo de envío: get o POST -->
    <form action="post.php" method="post">
        <p>
            <!-- En name se escribe el nombre de la variable que se va a enviar -->
            <label>Nombre</label>
            <input type="text" name="nombre" />
        </p>
        <p>
            <label>Apellido1</label>
            <input type="text" name="apellido1" />
        </p>
        <p>
            <label>Apellido2</label>
            <input type="text" name="apellido2" />
        </p>
        <input type="submit" value="enviar" />
    </form>
</body>
</html>