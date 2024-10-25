<?php
session_start();
include './includes/header.php';
?>
<p> bienvenido <?php echo $_SESSION['rol'].'   '.$_SESSION['nombre']; ?></p>
<a href="./funciones/cerrar_cesion.php">cerrar sesion</a>





<?php
if ($_SESSION['rol'] == 'instructor') {

    require __DIR__ .'/includes/panel_instructor.php';
} else {
    require __DIR__ . '/includes/consultar_aprendiz.php';
}

?>