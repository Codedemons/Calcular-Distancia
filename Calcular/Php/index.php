<?php
$X1 = rand(0,100);
$X2 = rand(0,100);
$Y1 = rand(0,100);
$Y2 = rand(0,100);

$resul = sqrt((pow($Y1-$X1,2))+(pow($Y2-$X2,2)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="Style/Style.css">
    <link rel="stylesheet" href="Style/font-awesome.css">
    
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            
        </section>
 
        <form action="index.php" method="post" class="form_contact">
            <h2>Distancia de dos Puntos</h2>
            <div class="user_info">
                <p>Puntos A</p>
                <div class="">                            
                    <div class="">
                        <label for="names" class="">X1</label>
                        <input type="text" id="X1" class="form-control" value="<?php echo $X1; ?>" name="X1" readonly>                                        
                    </div>
                    <div class="">
                        <label class="">X2</label>
                        <input type="text" id="X2" class="form-control" value="<?php echo $X2; ?>" name="X2" readonly>
                    </div>
                </div>
                <p>Puntos B</p>
                <div class="">                            
                    <div class="">
                        <label for="names" class="">Y1</label>
                        <input type="text" id="Y1" class="form-control" value="<?php echo $Y1; ?>" name="Y1" readonly>                                        
                    </div>
                    <div class="">
                        <label for="names" class="">Y2</label>
                        <input type="text" id="Y2" class="form-control" value="<?php echo $Y2; ?>" name="Y2" readonly>
                    </div>
                </div>

                <input type="submit" value="Calcular" id="btnSend">
            </div>
            <h2>El Resultado es: <?php echo $resul;?></h2>
        </form>

    </section>

</body>
</html>
