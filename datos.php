<?php
// mostrar todos los datos existentens en la base de datos
$conexion = mysqli_connect("localhost", "root", "", "datos_form") or die("Problemas de conexion");
$consulta = "SELECT * FROM datos";
$ejecutar = mysqli_query($conexion, $consulta);
?>


<style>
table,
th,
td {
    border: 1px solid black;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

tr:nth-child(odd) {
    background-color: #ffffff;
}
</style>



<table>


    <tr>
        <td><strong>Nombre</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Mensaje</strong></td>
    </tr>

    <?php
    while ($fila = mysqli_fetch_array($ejecutar)) {
        echo "<tr>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['mensaje'] . "</td>";
        echo "</tr>";
    }
    ?>

</table>