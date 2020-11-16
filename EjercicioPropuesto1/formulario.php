<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario de Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post"> 
        <h1 class="display-4" style="margin:20px 80px 0 80px;">Registro de Pago de Haberes</h1>       
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <input type="text" class="form-control" name="txtnombres" placeholder="Ingrese nombres">
        </div>
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <input type="text" class="form-control" name="txtcategoria" placeholder="Ingrese categoría">
        </div>
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <input type="number" class="form-control" name="txtbasico" placeholder="Ingrese sueldo básico">
        </div>
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <input type="number" class="form-control" name="txtbonificacion" placeholder="Ingrese bonificación">
        </div>
        <div class="form-group" style="margin:20px 80px 0 80px;">
            <select class="form-control" name="txttipoAportacion" >
                <option value="AFP">AFP</option>
                <option value="ONP">ONP</option>
            </select>
        </div>
        
        <button type="submit" name="enviar" class="btn btn-primary" style="margin:20px 80px 0 80px;">Enviar</button>

    </form>
    <?php
        if(isset($_POST['enviar'])){
            //obteniendo los valores de los input
            $nombres=$_POST['txtnombres'];
            $categoria=$_POST['txtcategoria'];
            $basico=$_POST['txtbasico'];
            $bonificacion=$_POST['txtbonificacion'];
            $tipoAportacion=$_POST['txttipoAportacion'];
            
            //Utilizando la clase Empleado
            include 'Empleado.php';
            //Instanciando 
            $empleado = new Empleado($nombres,$categoria,$basico,$bonificacion,$tipoAportacion);
            echo '<p style="margin:0 80px;">++++++ RESULTADOS ++++++</p>';
            $empleado->hallarRemuneracion();
            $empleado->hallarDescuento();
            $empleado->hallarNeto();

        }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>