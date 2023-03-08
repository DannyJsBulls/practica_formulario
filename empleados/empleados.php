<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny Toro</title>
    <link rel="stylesheet" href="../Estilos/empleados.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="fila">
                    <a href="../ingresar/ingresar.php">Ingresar</a>
                    <a href="../registrar/registrar.php">Registrar</a>
                    <a href="../index.php">Empleados</a>
                    <a href="../salir/salir.php">Salir</a>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="fila">
                <div class="table">
                    <h2>EMPLEADOS</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Puesto</th>
                                <th>Salario</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Danny</td>
                                <td>Toro</td>
                                <td>danny.toro.1995@hotmail.com</td>
                                <td>Tecnologo ADSO</td>
                                <td>$ 8000.000</td>
                                <td><button>Editar</button></td>
                                <td><button>Borrar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
</html>