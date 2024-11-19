<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Autos</title>
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

    <!-- Main Content: Imagen o contenido principal -->
    <div class="text-center my-4">
        <h1>Moto</h1>
        <img src="img/moto.png" alt="Imagen de moto" style="max-width: 25%; height: auto;">
    </div>
    <div class="text-center my-4">
        <h1>Carro</h1>
        <img src="img/carro.png" alt="Imagen de moto" style="max-width: 25%; height: auto;">
    </div>

    <!-- Footer: Derechos reservados -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Autos Alex. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
