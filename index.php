<?php
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/session_start.php";

    if(isset($_GET['views'])){
        $url=explode("/",$_GET['views']);
    }else{
        $url=["login"];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
<button class="button is-loading">Loading</button>
<button class="button is-link is-loading">Loading</button>
<button class="button is-primary is-loading">Loading</button>
<button class="button is-info is-loading">Loading</button>
<button class="button is-success is-loading">Loading</button>
<button class="button is-warning is-loading">Loading</button>
<button class="button is-danger is-loading">Loading</button>

    <?php require_once "./app/views/inc/script.php"; ?>
</body>
</html>