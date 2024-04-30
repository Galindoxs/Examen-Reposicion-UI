<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Empleados</title>
</head>
<body>

    <button><a href="{{route('Empleados.nuevo')}}">Crear Nuevo Empleado</a></button>
    <br><br><br>

    <table>
        <thead>
            <tr>
                <th>Id prestamo</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>fecha Ingreso</th>
                <th>salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->idprestamo}}</td>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->fechaingreso}}</td>
                    <td>{{$empleado->salario}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>
    <br><br>
    <button><a href="{{route('inicio')}}">Atras</a></button>

</body>
</html>