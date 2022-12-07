<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 3</title>
</head>
<body>
<?php 

    require_once("depreciacion.php");
    $obj = new depreciacion();
    $precio=$_GET["precio"];
    $vida=$_GET["vida"];
    $obj->precio= $precio;
    $obj->vida= $vida;
    ?>
    <div class="container-md">
    <h1>
        Calcular la Depreciacion 
    </h1>    
    <h2>
        Precio Original: B/. 150,000.00
        <br>
        Vida Util: 5 Años 
        <br>
        Depreciacion Anual: 30,000.00
    </h2>
    <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th class="text-center" scope="col">Año</th>
                <th class="text-center" scope="col">Valor por Año</th>
                <th class="text-center" scope="col">Valor Recaudado</th>
            </tr>
        </thead>
        <?php for($x=0; $x<=5; $x++){?> 
        <tbody>
            <tr>
                <td class="text-center"><?php echo $x?></td>
                <td class="text-center"> <?php $obj->depreciacion= $x; echo $obj->MostrarValor(); ?> </td>
                <td class="text-center"> <?php echo $obj->MostrarDepreciacion(); ?> </td>
            </tr>
        </tbody>
        <?php } ?> 
    </table>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>