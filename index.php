<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de área</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1 class="mt-5 mb-5 text-success">Cálculo de área</h1>

        <!--  Rectángulo -->
        <h3 class="mb-3 mt-5">Rectángulo</h3>
        <img src="images/rectangle.png" alt="Imagen de un rectángulo" style="width: 200px; height: auto;">
        <form class="mt-3" action="index.php" method="post">
            <input type="number" name="lado1" placeholder="Lado 1" required>
            <input type="number" name="lado2" placeholder="Lado 2" required>
            <button type="submit" name="calcularRectangulo" class="btn btn-success">Calcular área</button>
        </form>
        <div class="text-success mt-3 mx-auto" id="resultado-rectangulo" style="width: 30%;">
            <!-- Aquí mostrar los resultados -->
            <?php
                echo '<p class="my-3 text-dark">Resultado:</p>';
                echo '<p class="my-3 fw-bold fs-3 text-light bg-success bg-opacity-75">Rectángulo</p>';
            ?>
        </div>

        <hr>

        <!--  Círculo -->
        <h3 class="mb-3 mt-5">Círculo</h3>
        <img src="images/circle.jpg" alt="Imagen de un círculo" style="width: 200px; height: auto;">
        <form class="mt-3" action="index.php" method="post">
            <input type="number" name="radio" placeholder="Radio" required>
            <button type="submit" name="calcularCirculo" class="btn btn-success">Calcular área</button>
        </form>
        <div class="text-success mt-3 mx-auto" id="resultado-circulo" style="width: 30%;">
            <!-- Aquí mostrar los resultados -->
            <?php
                echo '<p class="my-3 text-dark">Resultado:</p>';
                echo '<p class="my-3 fw-bold fs-3 text-light bg-success bg-opacity-75">Rectángulo</p>';
            ?>
        </div>

        <hr>

        <!--  Triángulo Rectángulo -->
        <h3 class="mb-3 mt-5">Triángulo</h3>
        <img src="images/trianglerectangle.jpg" alt="Imagen de un círculo" style="width: 250px; height: auto;">
        <form class="mt-3" action="index.php" method="post">
            <input type="number" name="cateto1" placeholder="Cateto 1" required>
            <input type="number" name="cateto2" placeholder="Cateto 2" required>
            <button type="submit" name="calcularTriangulo" class="btn btn-success">Calcular área</button>
        </form>
        <div class="text-success mt-3 mx-auto" id="resultado-rectangulo" style="width: 30%;">
            <!-- Aquí mostrar los resultados -->
            <?php
                echo '<p class="my-3 text-dark">Resultado:</p>';
                echo '<p class="my-3 fw-bold fs-3 text-light bg-success bg-opacity-75">Rectángulo</p>';
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>