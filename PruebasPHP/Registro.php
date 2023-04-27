<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor='black' text="white">

        <form action="Usuario2.php" method="post">
                <table  align="center" bgcolor ="black" color="white"> 
                        <h2 align ='center' color='#ffffff'>Regitro usuarios</h2>
                <tr>
                        <td align='center'> Nombre</td>
                        <td>
                              <input type= 'text' name= 'nomb' size ='30'>
                        </td>
                </tr>
                <tr>
                        <td align='center'> Apellidos </td>
                        <td>
                              <input type= 'text' name= 'apel' size ='30'>
                        </td>
                </tr>
                <tr>
                        <td align='center'> E-mail </td>
                        <td>
                              <input type= 'email' name= 'email' size ='30' >
                        </td>
                </tr>
                <tr>
                        <td align='center'>Contraseña </td>
                        <td>
                              <input type= 'password' name= 'cont' size ='30'>
                        </td>
                </tr>
                <tr>
                        <td align='center'>Usuario </td>
                        <td>
                              <input type= 'text' name= 'usua' size ='30' >
                        </td>
                </tr>
                <tr>
                        <td align='center'>Direccion </td>
                        <td>
                              <input type= 'text' name= 'dire' size ='30'>
                        </td>
                </tr>
                <tr>
                        <td align='center'>Telefono </td>
                        <td>
                              <input type= 'number' name= 'numt' size ='30' maxlenght='50'>
                        </td>
                </tr>

                <tr>
                        <td align='center'> <input type = 'reset'  value = 'Borrar' > </td>
                        <td>
                                <input type = 'submit'value = 'Enviar'>
                        </td>
                </tr>

                </table>
        <form>
    </body>
</html>