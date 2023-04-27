<!doctype html>
<html>
    <head>
    <title>
     Programa1 
    </title>
    <style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body text="#ffffff"">
        <form action="operaciones.php" method="get">  
                <table bgcolor ="black"> 
                        <tr>
                            <td>Igrese su nombre </td>
                            <td><input type = 'text' name= 'nomb'>   </td>
                        </tr>
                        <tr>
                            <td>Igrese su apellido </td>
                            <td><input type = 'text' name= 'apel'>   </td>

                        </tr>
                        <tr>
                            <td>Igrese su direccion </td>
                            <td><input type = 'text' name= 'direc'>   </td>

                        </tr>
                        <tr>
                            <td>Igrese su telefono </td>
                            <td><input type = 'text' name= 'tele'>   </td>

                        </tr>
                        <tr>
                        <td> Primer numero</td>
                        <td>
                              <input type= 'number' name= 'num1'>
                        </td>
                        </tr>
                        <tr>
                            <td> Operacion</td>
                            <td>
                                <input type= 'radio' name= 'oper' value='suma'>+
                                <br>
                                <input type= 'radio' name= 'oper' value='resta'>-
                                <br>
                                <input type= 'radio' name= 'oper' value='mult'>X
                                <br>
                                <input type= 'radio' name= 'oper' value='div'>÷
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td> Numero 2 </td>
                            <td>
                                <input type= 'number' name= 'num2'>
                            </td>
                        </tr>

                        <tr>
                            <td> 
                                <input type = 'reset' value = 'Borrar'>
                            </td>
                            <td>
                                <input type = 'submit' value = 'Calcular'>
                            </td>
                        </tr>

                </table>
        <form>

    </body>

</html>