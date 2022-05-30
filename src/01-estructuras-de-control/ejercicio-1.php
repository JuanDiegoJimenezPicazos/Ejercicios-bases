<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        body{
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $numero = rand(0, 1);

        if($numero == 0){
            print("<img src='media/cara.png' alt='cara'>");
        }else{
            print("<img src='media/cruz.png' alt='cruz'>");
        }
        ?>
    </div>
</body>
</html>




