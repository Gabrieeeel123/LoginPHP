<!doctype html>
<html>
    <head>
        <title>
        Operaciones 
    </title>
    <style>
    </style>
    <meta charset="UTF-8">
    </head>
        <body text="black">
                 <?php
                 $nom = $_REQUEST['nomb'];
                 $ape = $_REQUEST['apel'];
                 $dire = $_REQUEST['direc'];
                 $tele = $_REQUEST['tele'];
                 echo "Los datos ingresados fueron: <br>Nombre: $nom<br>Apellido: $ape<br>Direccion: $dire<br>Telefono: $tele <br>";
                    function calcular($num1,$operacion,$num2){
                        switch($operacion){
                            case'suma': 
                                $resultado=$num1+$num2;
                                break;
                            case'resta': 
                                $resultado=$num1-$num2;
                                break;
                            case'mult': 
                                $resultado=$num1*$num2;
                                break;
                            case'div': 
                                $resultado=$num1/$num2;
                                break; 
                        }
                        return $resultado;
                    }
                        $op1=$_REQUEST['num1']; 
                        $ope=$_REQUEST['oper'];
                        $op2=$_REQUEST['num2'];
                        $resu = 0;  
                        echo ' El resultado es: ', calcular($op1,$ope,$op2); 
                 ?>
                 <br>
                 <a href="Programa1.php">Regresar</a>
        </body>

</html>