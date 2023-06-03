<?php
    // Obtén los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['mensaje'];
    // Otros campos del formulario
    
    // Construye el mensaje del correo electrónico para el usuario
    $mensaje_usuario = "Hola $nombre,\n\nGracias por completar el formulario. Aquí tienes una copia de los datos que proporcionaste:\n\n";
    $mensaje_usuario .= "Nombre: $nombre\n";
    $mensaje_usuario .= "Email: $email\n";
    $mensaje_usuario .= "Telefono: $telefono\n";
    $mensaje_usuario .= "Mensaje: $mensaje\n";
    // Otros campos del formulario
    
    // Construye el mensaje del correo electrónico para ti
    $mensaje_admin = "Se ha recibido un nuevo formulario con los siguientes datos:\n\n";
    $mensaje_admin .= "Nombre: $nombre\n";
    $mensaje_admin .= "Email: $email\n";
    $mensaje_admin .= "Telefono: $telefono\n";
    $mensaje_admin .= "Mensaje: $mensaje\n";
    // Otros campos del formulario
    
    // Envía el correo electrónico al usuario
    $destinatario_usuario = $email;
    $asunto_usuario = "Copia de formulario";
    $cabeceras_usuario = "From: trabajodigital.site@hotmail.com";

    // Asegúrate de reemplazar "tu_direccion_de_correo@example.com" con tu dirección de correo electrónico real

    mail($destinatario_usuario, $asunto_usuario, $mensaje_usuario, $cabeceras_usuario);
    
    // Envía el correo electrónico a ti
    $destinatario_admin = "trabajodigital.site@hotmail.com";
    $asunto_admin = "Nuevo formulario recibido";
    $cabeceras_admin = "From: trabajodigital.site@hotmail.com";

    // Asegúrate de reemplazar "tu_direccion_de_correo@example.com" con tu dirección de correo electrónico real

    mail($destinatario_admin, $asunto_admin, $mensaje_admin, $cabeceras_admin);

    // Redirecciona al usuario a una página de confirmación o muestra un mensaje de éxito
    echo "El formulario se envió correctamente. Se ha enviado una copia a tu dirección de correo electrónico.";
?>
