<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <br>

    <div class = "container bg-success">
        
        <form method="get">
                
            <div class="row"><h1 class="btn-dark">Ejercicio 03</h1></div><br>

                <div class="row">
                    <div class="col"><input type="number" name="num1" placeholder="1er número"></div>
                    <div class="col"><input type="number" name="num2" placeholder="2do número"></div>
                </div>
                <br>
                <center><input type="submit" name="enviar"><br><br></center>            
                
                <div class="row btn-dark">
                    <center><?php

                        $prinum = $_GET['num1'];
                        $segnum = $_GET['num2'];
                    
                        if (isset($_GET['enviar'])){
                            if($prinum==$segnum)
                            {	
                                echo '<h4>Los números son iguales</h4>';
                            }
                            else
                            {
                                if($prinum>$segnum)
                                {
                                    echo "<h4>El número $prinum es mayor que el número $segnum</h4>";
                                }
                                else
                                {
                                    echo "<h4>El número $prinum es menor que el número $segnum</h4>";
                                }
                            }
                        }
                    ?></center>
                </div>

            </div>

                    
        </form>
        
    </div>
</body>
</html>