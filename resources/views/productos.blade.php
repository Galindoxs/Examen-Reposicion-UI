<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Productos</title>
</head>
<body>

    <button><a href="{{route('Productos.nuevo')}}">Crear Nuevo Producto</a></button>
    <br><br><br>


    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Paga Isv</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->pagaisv}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <br><br>
    <button><a href="{{route('inicio')}}">Atras</a></button>
    
</body>
</html>