<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Producto</title>
</head>
<body>

    <br>
    <div>

        <form action="{{route('Productos.crear')}}" method="POST">
            @csrf
            <input type="text" name="descripcion" placeholder="descripcion"><br><br>
            <input type="number" name="precio" placeholder="precio"><br><br>
            <input type="number" name="stock" placeholder="stock"><br><br>
            
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>