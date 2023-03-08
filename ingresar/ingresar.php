<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny Toro</title>
    <link rel="stylesheet" href="../Estilos/ingresar.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="fila">
                    <a href="../index.php">Ingresar</a>
                    <a href="../registrar/registrar.php">Registrar</a>
                    <a href="../empleados/empleados.php">Empleados</a>
                    <a href="../salir/salir.php">Salir</a>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="fila">
                <div class="formulario">
                    <h2>INGRESAR</h2>
                    <form action="ingresar.php" method="POST">
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="contraseña" placeholder="Contraseña">
                        <input type="submit" class="btn-primary" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>