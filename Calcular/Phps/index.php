<?php
    $resul = 0;                                    
    $X1 = $X2 = $Y1 = $Y2 = "";                 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {                                        
        $X1 = test_input($_POST["X1"]);
        $X2 = test_input($_POST["X2"]);
        $Y1 = test_input($_POST["Y1"]);
        $Y2 = test_input($_POST["Y2"]);
    }      

    //$resul = intval($X1)+ intval($X2);
    $resul = sqrt((pow(floatval($Y1)-floatval($X1),2))+(pow(floatval($Y2)-floatval($X2),2)));

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link href="Style/Style.css" rel="stylesheet">
    <link href="Style/normalize.css" rel="stylesheet">

  <title>Distancia</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           
             <img src="images/DosPuntos.png" alt="Formula" class="col-xl-5 col-lg-12 register-bg ">
           
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Distancia de dos puntos</h1>                                            
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
                        <p>Puntos A</p>
                        <div class="form-row mb-2">                            
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">X1</label>
                                <input type="text" class="form-control" placeholder="<?php echo $X1;?>" name="X1" id="X1" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">X2</label>
                                <input type="text" class="form-control" placeholder="<?php echo $X2;?>" name="X2" id="X2" required>
                            </div>
                        </div>
                        <p>Puntos B</p>
                        <div class="form-row mb-2">                            
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Y1</label>
                                <input type="text" class="form-control" placeholder="<?php echo $Y1;?>" name="Y1" id="Y1" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Y2</label>
                                <input type="text" class="form-control" placeholder="<?php echo $Y2;?>" name="Y2" id="Y2" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Resultado</span></label>
                            <p> <?php echo $resul; ?> </p>
                        </div>                        
                        <div class="form-group">
                            <input type="submit" value="Ejecutar" class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100">
                            
                            <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100" onclick="limpiar()">Limpiar</button>

                        </div>
                        <script>
                            function limpiar() {
                                document.getElementById("X1").value = "0";
                                document.getElementById("X2").value = "0";
                                document.getElementById("Y1").value = "0";
                                document.getElementById("Y2").value = "0";
                            }
                        </script>
                    </form>                    
                </div>
           </div>
       </div>
   </section>
  </body> 
</html>