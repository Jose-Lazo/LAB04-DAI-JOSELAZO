<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <br>

    <div class = "container btn-warning border">
        
        <div class = "row btn-dark">

            <?php
                
                echo "<h1>Ejercicio 01</h1>";
                
            ?>

        </div>

        <br>

        <?php

            $nombre = $_GET["nombre"];
            $email = $_GET["email"];

        ?>

        <div class = "row">

            <div class = "col">

                <h3>Nombre:</h3>

            </div>

            <div class = "col">

                <?php
                
                    echo $nombre;

                ?>

            </div>

        </div>

        <div class = "row">

            <div class = "col">

                <h3>Email:</h3>

            </div>

            <div class = "col">

                <?php
                
                    echo $email;

                ?>

            </div>

        </div>

        <br>

        <center><a class = "btn btn-outline-dark" href="?nombre=Jose Lazo&email=jose.lazo@tecsup.edu.pe">Click</a></center>
        
        <br>

    </div>
</body>
</html>