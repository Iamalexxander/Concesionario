<?php
require_once '../Controlador/Conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Autos Alex</title>
</head>
<body>
    <!-- Header: Navbar con secciones -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Autos Alex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carros.php">Carros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="precios.php">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informacion.php">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informacion.php">Carros registrados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Main Content: Formulario centrado -->
    <div class="row justify-content-center formulario">
        <div class="col-md-6">
            <form class="formulario p-4 border rounded shadow" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa:</label>
                    <input type="text" class="form-control" id="placa" name="placa" maxlength="7" required
                pattern="[A-Z]{3}-[0-9]{3}" title="Formato: CAR-784 (3 letras, un guion y 3 números)">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color:</label>
                    <input type="text" class="form-control" id="color" name="color">
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo">
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">Año:</label>
                    <input type="number" class="form-control" id="año" name="año" min="1900" max="<?php echo date("Y"); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-1n0+qg1e0D1B+g1o2b2s1g1q1e1g2n1o2g1a2h1g1a2h1g1e1g1g1g1g1g1g1g" crossorigin="anonymous"></script>
</body>
</html>