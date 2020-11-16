<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario de Traslado de Producción</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post"> 
        <h1 class="display-4" style="margin:20px 80px 0 80px;">Traslado de Producción</h1>
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <select class="form-control" name="txtEmpresa" >
                <option value="">Seleccione la empresa</option>
                <option value="IVOVIC">IVOVIC</option>
                <option value="Leonidas">Leonidas</option>
            </select>
        </div>       
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <input type="text" class="form-control" name="txtDestinatario" placeholder="Ingrese Destinatario">
        </div>
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <select class="form-control" name="txtDestino" >
                <option value="">Seleccione el destino</option>
                <option value="Arequipa">Arequipa</option>
                <option value="Ilo">Ilo</option>
                <option value="Tacna">Tacna</option>
                <option value="Piura">Piura</option>
                <option value="Tumbes">Tumbes</option>
                <option value="Cajamarca">Cajamarca</option>
                <option value="Lambayeque">Lambayeque</option>
                <option value="Lima">Lima</option>
                <option value="Loreto">Loreto</option>
                
            </select>
        </div>  
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <input type="number" class="form-control" name="txtToneladasMetricas" placeholder="Ingrese Toneladas Métricas">
        </div>
        
        <button type="submit" name="enviar" class="btn btn-primary" style="margin:20px 80px 0 80px;">Enviar</button>

    </form>
    <?php
        if(isset($_POST['enviar'])){
            //obteniendo los valores de los input
            $empresa=$_POST['txtEmpresa'];
            $destinatario=$_POST['txtDestinatario'];
            $destino=$_POST['txtDestino'];
            $toneladasMetricas=$_POST['txtToneladasMetricas'];
            
            if($empresa == 'IVOVIC'){
                include 'IVOVIC.php';
                //Instanciando 
                $trasladoI = new Ivovic($destinatario,$destino,$toneladasMetricas);
                echo $trasladoI->imprimirDatos();

            }
            elseif($empresa=='Leonidas'){
                include 'Leonidas.php';
                $trasladoL = new Leonidas($destinatario,$destino,$toneladasMetricas);
                echo $trasladoL->imprimirDatos($destino);
            }

        }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>