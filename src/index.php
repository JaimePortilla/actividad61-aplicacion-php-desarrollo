<?php
// index.php
session_start();
include_once("config.php");

// Si el usuario ya ha iniciado sesión se le redirige a la página home.php
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALORANT - Agent Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Sugerencia: Asegúrate de tener una imagen de Valorant en esta ruta */
            background-image: url('img/valorant_bg.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        .welcome-card {
            background-color: rgba(255, 255, 255, 0.95); /* Blanco con ligera transparencia */
            border-radius: 5px; /* Bordes más rectos estilo Valorant */
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 90%;
            box-shadow: 0 15px 35px rgba(0,0,0,0.6);
            border-left: 5px solid #ff4655; /* El rojo característico de Valorant */
        }
        .logo-main {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }
        h1 {
            color: #0f1923; /* Azul muy oscuro de Valorant */
            font-weight: 900;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .btn-custom {
            padding: 12px 30px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            border-radius: 0; /* Botones cuadrados estilo Riot */
        }
        .btn-valorant-red {
            background-color: #ff4655;
            border: none;
            color: white;
        }
        .btn-valorant-red:hover {
            background-color: #0f1923;
            color: white;
        }
        footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            font-size: 0.85rem;
            color: #555;
        }
    </style>
</head>
<body>

<div class="welcome-card">
    <header>
        <img src="html/valorant_logo.png" alt="Valorant Logo" class="logo-main">
        <h1>Protocolo VALORANT</h1>
        <p class="text-muted mb-4">Base de datos de Agentes. Acceso restringido a personal autorizado.</p>
    </header>

    <main>
        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
            <a href="login.php" class="btn btn-valorant-red btn-custom shadow-sm">Iniciar Sesión</a>
            <a href="registro.php" class="btn btn-dark btn-custom shadow-sm">Registrar Recluta</a>
        </div>
    </main>

    <footer>
        <p class="mb-0">Sistema desarrollado por <strong>Jaime Portilla Pérez</strong></p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>