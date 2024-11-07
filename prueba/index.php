<?php
require_once("./app/config/dependencias.php");

session_start();
/* if (!isset($_SESSION['usuario'])) {
    header("location: ./login.php");
} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS . "bootstrap.min.css"; ?>">
    <link rel="stylesheet" href="<?= CSS . "inicio.css"; ?>">
    <link rel="stylesheet" href="<?= ICONS . "bootstrap-icons.css"; ?>">
    <link rel="stylesheet" href="<?= CSS . "table.css"; ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./public/js/table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Formulario de datos</title>
</head>

<body class="vh-100">
    <?php 
    if(isset($_REQUEST['view'])){
        $vista = $_REQUEST['view'];
        }
        else {
            $vista = "inicio";
        }
    $vista = $_REQUEST['view'];
    switch ($vista) {
        case "inicio":{
            require_once './views/home.php';       
            break;
        }
        case "login":{
            require_once './views/login.php';       
            break;
        }
        case "registro":{
            require_once './views/registro.php';       
            break;
        }
        default:
        require_once './views/error.php';       
        
            break;
    }
    ?>
    <script src="./public/js/alerts.js"></script>
    <script src="./public/js/registro_productos.js"></script>
    <script src="./public/js/cerrar_session.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>    
