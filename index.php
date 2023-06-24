<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $consumoCiudad = 14;
        $consumoRuta = 16;
        $precioCombustible = 80;
        $distanciaCiudad = 30;
        $distanciaRuta = 100;
        $litrosCiudad = $consumoCiudad * $distanciaCiudad;
        $costoCiudad = $litrosCiudad * $precioCombustible;
        $litrosRuta = $consumoRuta * $distanciaRuta;
        $costoRuta = $litrosRuta * $precioCombustible;
        $totalLitros = $litrosCiudad + $litrosRuta;
        $totalKilometros = $distanciaCiudad + $distanciaRuta;
        $porcentajeCiudad = ($distanciaCiudad / $totalKilometros) * 100;
        $porcentajeRuta = ($distanciaRuta / $totalKilometros) * 100;
        echo "Consumo de combustible:<br>";
        echo "Tramo ciudad:<br>";
        echo "Distancia: $distanciaCiudad km<br>";
        echo "Litros: $litrosCiudad litros<br>";
        echo "Porcentaje del viaje: $porcentajeCiudad%<br>";
        echo "Costo: $" . number_format($costoCiudad, 2) . "<br>";
        echo "<br>";
        echo "Tramo ruta:<br>";
        echo "Distancia: $distanciaRuta km<br>";
        echo "Litros: $litrosRuta litros<br>";
        echo "Porcentaje del viaje: $porcentajeRuta%<br>";
        echo "Costo: $" . number_format($costoRuta, 2) . "<br>";
        echo "<br>";
        echo "Total de litros utilizados: $totalLitros litros<br>";
    ?>
</body>
</html>