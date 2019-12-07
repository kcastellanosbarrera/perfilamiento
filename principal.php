<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/men.css">
</head>
<body>

    <?php 
            
            #control MVC.
            require_once "controladores/control.php";

            $mvc = new ControlMvc();
            $mvc -> plantillaPrincipal();



    ?>

        <!--js de bootstrap -->
        <script src="js/bootstrap.min.js"></script>
    <!--libreria de JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>