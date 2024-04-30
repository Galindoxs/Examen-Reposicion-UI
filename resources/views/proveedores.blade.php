<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Proveedores</title>
</head>
<body>

    <button><a href="{{route('Proveedores.nuevo')}}">Crear Nuevo Proveedor</a></button>
    <br><br><br>

    <table>
        <thead>
            <tr>
                <th>Id Proveedor</th>
                <th>nombre</th>
                <th>fecha Registro</th>
                <th>telefono</th>
                <th>correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->idproveedor}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->fecharegistro}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->correo}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
    
    <br><br>
    <button><a href="{{route('inicio')}}">Atras</a></button>
    
</body>
</html>