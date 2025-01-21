<<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <img style="float:left;" src="images/gobierno.png" alt="Gobierno">
        <img style="float:right;" src="images/gobierno.png" alt="Gobierno">
        <h2>SECRETARÍA DE AMBIENTE Y DESARROLLO SUSTENTABLE</h2>
        <nav>
            <a href="https://ambiente.sanjuan.gob.ar/" target="_blank">Página de la Secretaría</a>
            <a href="images/terminos.pdf" target="_blank">Términos</a>
            <a href="https://sisanjuan.gob.ar/" target="_blank">SI San Juan</a>
        </nav>
    </header>
    <main>
        <h4>La Secretaría de Ambiente te ayuda a gestionar tus tareas:</h4>
        <h3>Selecciona tu rol :</h3>
        <form action="login.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </main>
</body>
</html>






<h3 style = "color:black"> Completa tu registro de solicitud de retiro RAEE</h3>




<form method="Post">

<div class="input-wraper">
<input type="text" name ="name" placeholder="Nombre">
<img class="input-icon" src ="Images/name.svg" alt= "">
</div>

<div class="input-wraper">
<input type="email" name ="email" placeholder=" email">
<img class="input-icon" src ="Images/email.svg" alt= "">
</div>

<div class="input-wraper">
<input type="text" name ="ordenes" placeholder="ordenes">
<img class="input-icon" src ="Images/direction.svg" alt= "">
</div>

</div>
<input class="btn" type="submit" name = "register" value ="Enviar formulario">
 


</form>



<?php

include("registro.php");




?>

</body>

<div>

</html>
