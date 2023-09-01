<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MegaVentasOnline</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="shortcut icon" href="img/logo2.png" content="ie-edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>
    <header>
            <div class="logo">
            <a href="http://localhost/Megaventas/Megaventas.php"><img src="img/logo.png"  alt=""></a>
            </div>
                <div class="nav-list">
                    <li class="list"><a class="lista" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/telefonia/">Celulares y Teléfonos</a></li>
			    	<li class="separador">|</li>
                    <li class="list"><a class="lista" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/electronica/">Electrónica</a></li>
			    	<li class="separador">|</li>
                    <li class="list"><a class="lista" href="#">Más categorías</a>
                    <ul>
                        <li class="list"><a class="lista" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/camaras-digitales/camaras-accesorios/">Cámaras y Accesorios</a></li>
                        <li class="list"><a class="lista" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/electronica/">Electrónica, Audio y Video</a></li>
                        <li class="list"><a class="lista" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/deportes/">Deportes y Fitness</a></li>
                        <li class="list"><a class="lista" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/listado/industrias-oficinas/">Industrias y Oficinas</a></li>
                    </ul>
                    </li>
                </div>

                <div class="contenedorbotones">
                    <buttom><a class="botones" href="#"><img src="img/buscar.png"  alt=""></a></buttom>
                    <buttom><a class="botones" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/gz/cart"><img src="img/carrito.png"  alt=""></a></buttom>
                    <buttom><a class="botones" target="_blank" href="https://megaventasonline.mercadoshops.com.ar/p/contacto"><img src="img/contacto.png"  alt=""></a></buttom>
                </div>                
            </div>
    </header>

        <div class="cumplimos">
				<img src="img/cumplimos.png" alt="">
	    </div>
        <div class="diezaños">
				<img src="img/10años.png" alt="">
	    </div>
    <div class="ruleta">
        <input type="image" src="img/ruleta.png" alt="ruleta" id="ruleta">
        <img src="img/marcador2.png" alt="">
    </div>
    
    <div class="cont">
        <div class="panel">
        <form action="" method=get>    
        <input type="number" name="importe" required placeholder="Ingrese su importe">
        </div>
    
        </form> 
        <div class="resultado">
        <?php
        if(isset($_GET['importe'])){
        $importe=($_GET['importe']);
        if($importe<5000){
        echo'Su compra es inferior a $5000, no se le descuenta nada';
        }
        else{
        $numAzar = rand (1,3);
        switch($numAzar){
            case '1':{
                $porcentaje=15;                
                echo'
                <script>
                $(document).ready(function() {
                    let ruleta = document.getElementById("ruleta");
                    ruleta.classList.remove("por25");
                    ruleta.classList.remove("por45");
                    ruleta.classList.add("por15");
                });
                </script>';
            break;
            }
            case '2':{
                $porcentaje=25;
                echo'
                <script>                
                $(document).ready(function() {
                    let ruleta = document.getElementById("ruleta");
                    ruleta.classList.remove("por15");
                    ruleta.classList.remove("por45");
                    ruleta.classList.add("por25");                                    
                });
                
                </script>
                ';
            break;
            }
            case '3':{
                $porcentaje=45;
                echo'
                <script>
                $(document).ready(function() {
                    let ruleta = document.getElementById("ruleta");
                    ruleta.classList.remove("por25");
                    ruleta.classList.remove("por15");
                    ruleta.classList.add("por45");                    
                });
                </script>
                ';
            break;  
            }
            }
            $descuento=$importe*$porcentaje/100;
            $importefinal=$importe-$descuento;
            echo'Usted ha gastado <span class="importeOrig">'.$importe.'</span> y la suerte le ha otorgado un '.$porcentaje.'% de descuento<div class="seccionInf"><span></span> <p>Por lo cual solo abonará</p> <span class="importe"> ' .$importefinal.' </span></div>';
        }
        }
        ?> 
    </div>      
    </div>      
    </div>

 <script>    
</script>
</body>
</html>