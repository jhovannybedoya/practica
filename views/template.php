<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/assets/style/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>ejemplo</title>
</head>
<body>
    <?php
    include "views/component/menu.php";
    include "views/component/header.php";
    if(isset($_GET["route"])){
        if($_GET["route"]=="usuario"||
        $_GET["route"]=="home"||
        $_GET["route"]=="listaUsuario"){
            include "component/".$_GET["route"].".php";
        }
    }else{
        include "component/home.php";
    }
    ?>
    
    <h1>jhovanny bedoya</h1>
    <?php
    include "views/component/footer.php";
    ?>
</body>