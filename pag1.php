<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>Impuestos</h1>
    </header>
    <form action="#" method="post" name="asdfasd" enctype="multipart/form-data">
        <label for="nombre">Tu nombre</label>
        <input type="text" name="nombre" required>
        <br>
        <input type="radio" name="grupo" id="1" value="1">
        <label for="1">$0 - $1000</label>
        <br>
        <input type="radio" name="grupo" id="2" value="2">
        <label for="2">$1001 - $3000</label>
        <br>
        <input type="radio" name="grupo" id="3" value="3">
        <label for="3">+$3000</label>
        <br>
        <input type="submit" name="enviar">
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $nombre = $_POST['nombre'];
            $radio = $_POST['grupo'];
            echo $nombre;
            if($radio == '1'){
                echo " Usted no paga impuestos";
            }
            if($radio == '2'){
                echo " Usted paga el 20% de impuestos";
            }
            if($radio == '3'){
                echo " Usted paga el 50% de impuestos";
            }
        }
        
    
    ?>
</body>
</html>