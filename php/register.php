<?php
include("db_cnt.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['dui']) >=1 && strlen($_POST['names']) >=1 
        && strlen($_POST['apellido']) >=1 && strlen($_POST['citizen']) >=1
        && strlen($_POST['pssw']) >=1 && strlen($_POST['nTarjeta']) >=1
        && strlen($_POST['tipo']) >=1 && strlen($_POST['precio']) >=1){
            $dui = trim($_POST['dui']);
            $name = trim($_POST['names']);
            $apellido = trim($_POST['apellido']);
            $city = trim($_POST['citizen']);
            $pssw = trim($_POST['pssw']);
            $tarjeta = trim($_POST['nTarjeta']);
            $tipo = trim($_POST['tipo']);
            $precio = trim($_POST['precio']);

            $query = "INSERT INTO pruebita(DUI, name_user, apellido, citizen, pssw, num_tarjeta, tipo, saldo)
                    VALUES ('$dui','$name','$apellido','$city','$pssw','$tarjeta','$tipo','$precio')";
            $result = mysqli_query($conex,$query);

            if($result){
                ?>
                    echo "<script>
                        alert('¡Te has inscrito correctamente!');
                        window.location= 'index.php'
                </script>";
                <?php
            }else{
                ?>  
            echo "<script>
                        alert('¡Ups ha ocurrido un error!');
                        window.location= 'clientForm.php'
                </script>";
            <?php
            }
        }else{
            ?>  
            echo "<script>
                        alert('¡Por favor complete los campos!');
                        window.location= 'clientForm.php'
                </script>";
            <?php
        }
    }
?>