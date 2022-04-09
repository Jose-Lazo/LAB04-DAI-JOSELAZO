<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <br>

    <div class = "container btn-info border">
        
        <div class = "row btn-dark">

            <?php
                
                echo "<h1>Ejercicio 02</h1>";
                
            ?>

        </div>

        <br>

        <?php

            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];
            $num4 = $_GET["num4"];

        ?>

        <div class = "row">

            <div class = "col">

                <h3>Suma de los 2 primeros números:</h3>

            </div>

            <div class = "col">

                <?php

                    $sum = $num1 + $num2;
                    echo $sum;

                ?>

            </div>

        </div>

        <div class = "row">

            <div class = "col">

                <h3>Producto de los 2 números siguientes:</h3>

            </div>

            <div class = "col">

                <?php
                
                    $mul = $num3 * $num4;
                    echo $mul;

                ?>

            </div>

        </div>

        <br>

        <center><a class = "btn btn-outline-dark" href="?num1=26&num2=24&num3=13&num4=3">Click</a></center>
        
        <br>

    </div>
</body>
</html>