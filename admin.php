<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header('Location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #a8e6cf, #dcedc1); /* Gradiente verde agua */
            margin: 0;
            padding: 0;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #2d572c;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #2d572c;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="int"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button,
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #8bc34a; /* Verde claro */
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
        }

        button:hover,
        input[type="submit"]:hover {
            background-color: #76b047; /* Un tono más oscuro al pasar el cursor */
        }

        button:active,
        input[type="submit"]:active {
            background-color: #629d3a; /* Aún más oscuro al hacer clic */
        }

        input::placeholder {
            color: #aaa;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h2>Bienvenido, Administrador</h2>
    <form action="registro.php" method="post">
        <label for="name">Nombre del Transportista:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="ordenes">Cantidad de Órdenes Solicitadas:</label>
        <input type="number" name="ordenes" id="ordenes" required>
        
        <button type="submit">Registrar</button>
    </form>

    <form method="POST" action="buscar_ordenes.php">
        <label for="id">Buscar por ID:</label>
        <input type="int" id="id" name="id" placeholder="ID del transportista" required>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
