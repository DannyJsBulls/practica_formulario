<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny Toro</title>
    <link rel="stylesheet" href="../Estilos/registrar.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="fila">
                    <a href="../ingresar/ingresar.php">Ingresar</a>
                    <a href="../index.php">Registrar</a>
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
                    <h2>REGISTRAR UN EMPLEADO</h2>
                    <form action="registrar.php" method="POST">
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="apellido" placeholder="Apellido">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="puesto" placeholder="Puesto">
                        <input type="money" name="salario" placeholder="Salario">
                        <input type="submit" class="btn-primary" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>