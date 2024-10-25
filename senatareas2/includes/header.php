<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>senatareas</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body >
<header>
    <div class="navbar">
      <img class="logo" src="/img/logo.png" alt="">
        <div class="titulo">
        <a href="/index.php">
        <h1 >
            SenaTareas
        </h1>
        </a>
        </div>
        <div class="enlaces">
      <?php
     
      if (isset($_SESSION["login"])&& $_SESSION["login"] == true) {
        echo '<a href="/funciones/cerrar_cesion.php"> Cerrar Sesion</a>';
      } else {
        echo '<a href="/login.php"> Iniciar Sesion</a>';
        echo '<a href="/funciones/insertar_registro.php">Crear cuenta</a>';
      }
      ?>
        </div>
    
    </div>
</header>
