<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa #1</title>
</head>
<body>
    
    <div class="container-sm">
    
    <?php

    require_once("salario.php");
    $obj = new salario();
    $horas_trabajadas=$_GET["horas_trabajadas"];
    $pag_trabajadas=$_GET["pago_por_trabajadas"];
    $obj->horas = $horas_trabajadas;
    $obj->pago = $pag_trabajadas;
    ?>
    <h1> <?php echo "El salario bruto es de ---->" . $obj->MostrarSalarioBruto() . "$<br> El Descuento del %20 es de ---->" . $obj->MostrarDescuento() . "$<br> El Salari Neto es de ---->" . $obj->MostrarSalarioNeto()."$"  ; ?> </h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>