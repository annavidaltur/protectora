<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Formulario de contacto</h1>
        <h2>Correo enviado desde la página web</h2>
        <p>Nombre: {{$contacto['name']}}</p>
        <p>Correo: {{$contacto['correo']}}</p>
        <p>Mensaje: {{$contacto['mensaje']}}</p>
    </body>
</html>