<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista principal</title>
</head>
<?php include("../php/db_cnt.php"); ?>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>DUI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Nacionalidad</th>
                <th>Contraseña</th>
                <th> Número de tarjeta</th>
                <th>Tipo de cuenta</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <thbody>
            <?php
        $query = "SELECT * FROM pruebita";
        $result_tasks = mysqli_query($conex, $query);    
        while($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['DUI']; ?></td>
                <td><?php echo $row['name_user']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td><?php echo $row['citizen']; ?></td>
                <td><?php echo $row['pssw']; ?></td>
                <td><?php echo $row['num_tarjeta']; ?></td>
                <td><?php echo $row['tipo']; ?></td>
                <td><?php echo $row['saldo']; ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id']?>">
                        <input type="submit" name="registerF" value="Delete" />
                    </a>
                </td>
            </tr>
            <?php } ?>
        </thbody>
    </table>
</body>

</html>