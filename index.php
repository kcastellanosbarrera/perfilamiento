<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inicioSesion.css">
</head>
<body>
    <div class="cajaInicio">
        
         <?php 
            
            #control MVC.
            require_once "controladores/control.php";

            $mvc = new ControlMvc();
            $mvc -> plantillaSesion();
        ?>
    </div>

    <!--CDN de Vue.js-->
	<!-- production version, optimized for size and speed -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!--js creado para manejar vue -->
    <script src="js/proyectoPrueba.js"></script>
    <script src="js/jquery.js"></script>
    <!--js de bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!--libreria de JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>