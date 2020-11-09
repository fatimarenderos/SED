<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/principalFormStyle.css" rel="stylesheet" type="text/css">
    <title>Cliente</title>
</head>
<body>
<form method="POST" id="airportID">
        <fieldset id="fs">
            DUI:  <input type="text" name="dui" placeholder="DUI"/><br>
            Nombre: <input type="text" name="names" placeholder="Name"/><br>
            Apellido: <input type="text" name="apellido" placeholder="Apellido"/><br>
            Nacionalidad: <input type="text" name="citizen" placeholder="ES"/><br>
            Contraseña: <input type="password" name="pssw" placeholder="******"><br>
        </fieldset>
        <fieldset id="fs">
            Número de tarjeta:<input type="text" name="nTarjeta" placeholder="######"/><br>
            Tipo de cuenta: <input type="text" name="tipo" placeholder="Tipo"><br>
            Saldo: <input type="number" min="0.00" max="10000.00" step="0.01" name="precio" placeholder="$0.00"/><br>
        </fieldset>
        <input type="submit" name="register" value="Guardar"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>