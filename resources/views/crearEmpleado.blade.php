<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Nuevo Empleado</title>
</head>
<body>
    <br>
    <div>

        <form action="{{route('Empleados.crear')}}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="nombre"><br><br>
            <input type="text" name="apellido" placeholder="apellido"><br><br>
            <label for="fechaingreso"> Fecha de Ingreso</label><br>
            <input type="date" name="fechaingreso" placeholder="fecha Ingreso"><br><br>
            <input type="number" name="salario" placeholder="salario"><br><br>
            
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>