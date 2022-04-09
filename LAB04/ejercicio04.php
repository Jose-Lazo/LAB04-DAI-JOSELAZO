<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

    <br>

    <div class = "container bg-secondary">
        
        <form method="get">
                
            <div class="row"><h1 class="btn-dark">Ejercicio 04</h1></div><br>

                <div class="row">
                    <div class="col"><input type="number" name="num1" placeholder="1er número"></div>
                    <div class="col"><input type="number" name="num2" placeholder="2do número"></div>
                    <div class="col"><input type="number" name="num3" placeholder="3er número"></div>
                </div>
                <br>
                <center><input type="submit" name="enviar"><br><br></center>            
                
                <div class="row btn-dark">
                    <center><?php

                        $prinum = $_GET['num1'];
                        $segnum = $_GET['num2'];
                        $ternum = $_GET['num3'];
                    
                        if($prinum == $segnum && $segnum && $ternum)
                        {
                            echo "<h4>Los números son iguales</h4>";
                        }
                        else
                        {
                            if (isset($_GET['enviar'])){
                                if($prinum > $segnum)
                                {	
                                    if($prinum > $ternum)
                                    {
                                        echo "<h4>El número mayor es $prinum</h4>";
                                    }
                                    else
                                    {
                                        echo "<h4>El número mayor es $ternum</h4>";
                                    }
                                }
                                else
                                {
                                    if($segnum > $ternum)
                                    {
                                        echo "<h4>El número mayor es $segnum</h4>";
                                    }
                                    else
                                    {
                                        echo "<h4>El número mayor es $ternum</h4>";
                                    }
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