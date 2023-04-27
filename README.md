# LoginPHP

Login con validacion de campos en php.

Explicacion del codigo:
1.Un formulario html, referenciando una hoja de estilos donde se maneja todo el CSS de la vista.
2.En el codigo php usamos la funcion isset valida que se haya mandado el formulario correctamente
3.Usamos $_POST para guardar los datos de usuario y contraseña que se mandaron los campos del formulario.
4.en la variable $pattern  almacenamos los caracteres que seran permitidos en el formulario
5.usamos un condicional if para validar si los datos son iguales a los que previamente guardamos cono usuario y contraseña, en el caso de que no sea asi, mostrara un parrafo indicando que los datos son incorrectos
6.usamos otro condicional con la funcion !preg_match, en el primer campo indicamos la variable pattern, en el segundo la variable que guarda lo que guarde el campo de usuario, validamos que cumpla con el pattern en caso de que no, imprime en la pagina que no puede contener caracteres especiales
7.usamos de nuevo la funcion !preg_match para validar la contraseña, en este caso le decimos que la contraseña necesita almenos 1 mayuscula, 1 numero y minimo 8 digitos, en el caso de que no cumpla con alguna de estas, le indicara al usuario que no cumple con las indicaciones
