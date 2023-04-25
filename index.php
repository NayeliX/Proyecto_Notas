<?php
    //$dni=(isset($_POST['dni']))?$_POST['dni']:"";
    //echo $dni;

    include("config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT * FROM usuarios_datos");
    $sentenciaSQL->execute();
    $listaNotas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        


        <!-- Webpage Title -->
        <title>CT - Notas</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">

    </head>
    <body>
        
        <?php include("templates/navbar.php");?>        
        <?php include("templates/header.php");?>        

        
        <div id="contact" class="contact bg-gray">
            <div class="container">
                <h2>Ingresa correctamente tu DNI</h2>
                <p class="p-heading">Recuerda digitar correctamente tus datos</p>
                <!-- Formunulario -->
                <form method="POST" action="">
                    <div class="form-group" id="dni">
                        <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        type = "number" maxlength = "8" class="form-control-input-button" name="dni" required>
                        <br>
                        <br>
                    </div>
                    <button type="submit" class="form-control-submit-button" name="btnIngresar">Enviar</button>
                </form>
                <br><br><br>
                <div class="col-md-7">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>nombre</th>
                                <th>nota1</th>
                                <th>nota2</th>
                                <th>nota3</th>
                                <th>nota4</th>
                                <th>nota5</th>
                                <th>nota6</th>
                                <th>nota7</th>
                                <th>nota8</th>
                                <th>nota9</th>
                                <th>nota10</th>
                                <th>nota11</th>
                                <th>nota12</th>
                                <th>nota13</th>
                                <th>nota14</th>
                                <th>nota15</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($listaNotas as $usuarios_datos) { ?>
                            <tr>
                                <td><?php echo $usuarios_datos['nombre'];?></td>
                                <td><?php echo $usuarios_datos['nota1'];?></td>
                                <td><?php echo $usuarios_datos['nota2'];?></td>
                                <td><?php echo $usuarios_datos['nota3'];?></td>
                                <td><?php echo $usuarios_datos['nota4'];?></td>
                                <td><?php echo $usuarios_datos['nota5'];?></td>
                                <td><?php echo $usuarios_datos['nota6'];?></td>
                                <td><?php echo $usuarios_datos['nota7'];?></td>
                                <td><?php echo $usuarios_datos['nota8'];?></td>
                                <td><?php echo $usuarios_datos['nota9'];?></td>
                                <td><?php echo $usuarios_datos['nota10'];?></td>
                                <td><?php echo $usuarios_datos['nota11'];?></td>
                                <td><?php echo $usuarios_datos['nota12'];?></td>
                                <td><?php echo $usuarios_datos['nota13'];?></td>
                                <td><?php echo $usuarios_datos['nota14'];?></td>
                                <td><?php echo $usuarios_datos['nota15'];?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end of container -->
        </div> <!-- end of contact -->
        <!-- end of contact -->


        <?php //include("templates/footer.php");?>           
        <!-- Scripts -->
        <script src="js/smooth-scroll.polyfills.min.js"></script> <!-- Smooth Scroll -->
        <script src="js/scripts.js"></script> <!-- Custom scripts -->
    </body>
</html>