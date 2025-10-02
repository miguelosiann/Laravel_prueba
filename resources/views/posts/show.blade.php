<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>
    <p>Esta es una vista de show</p>
    <p>El producto es: {{ $producto }}</p>
    <?php
        echo "Hola Mundo esto es un mensaje de prueba" . $producto;
    ?>

    @if($producto == "1")
        <p>El producto es: celular</p>
    @else
        <p>El producto no es: carro</p>
    @endif
</body>
</html>