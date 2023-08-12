<?php
// Incluye el archivo de conexión
require_once "conexion.php";

// Consulta SELECT a la tabla Cliente
$query = "SELECT * FROM cliente";

// Realiza la consulta a la base de datos
$result = mysqli_query($link, $query);

if ($result) {
    // Procesa y muestra los resultados de la consulta
    echo "<h2>Resultados de la consulta:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nro_Documento</th><th>Nombre</th><th>Apellido</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Nro_Documento'] . "</td>";
        echo "<td>" . $row['Nombre'] . "</td>";
        echo "<td>" . $row['Apellido'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Error en la consulta: " . mysqli_error($link);
}

// Libera el resultado
mysqli_free_result($result);

// Cierra la conexión a la base de datos
mysqli_close($link);
?>

