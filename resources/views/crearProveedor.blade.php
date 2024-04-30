<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Proveedor</title>
</head>
<body>

    <br>
    <div>

        <form action="{{route('Proveedores.crear')}}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="nombre"><br><br>
            <label for="fecharegistro"> Fecha de Registro</label><br>
            <input type="date" name="fecharegistro" placeholder="fecha registro"><br><br>
            <input type="text" name="telefono" placeholder="telefono"><br><br>
            <input type="text" name="correo" placeholder="correo"><br><br>
            
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>