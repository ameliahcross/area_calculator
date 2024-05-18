document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('limpiar-rectangulo').addEventListener('click', function() {
        document.getElementById('formRectangulo').reset();
        document.getElementById('resultado-rectangulo').innerHTML = '';
    });

    document.getElementById('limpiar-circulo').addEventListener('click', function() {
        document.getElementById('formCirculo').reset();
        document.getElementById('resultado-circulo').innerHTML = '';
    });

    document.getElementById('limpiar-triangulo').addEventListener('click', function() {
        document.getElementById('formTriangulo').reset();
        document.getElementById('resultado-triangulo').innerHTML = '';
    });
});
