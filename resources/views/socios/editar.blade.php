<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <tittle>Laravel<tittle/>
        <br>
        <style>
            body {
                margin: auto;
                padding: 50px;
            }
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            input[type=submit]:hover {
                background-color: #45a049;
            }
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <a href="/socios">Ver listado de usuarios</a>
        <br>
        <h2>Editar usuario</h2>
        <div>
            <form action="/socios/editar/{{ $socio->id}}" method ="POST">
                @csrf
                {{ method_field('PUT') }}
                <label>Usuario:</label>
                <input type="text" name="usuario_id" placeholder="usuario" value="{{ $socio->usuario_id}}">
                <label>Nombre:</label>
                <input type="text" name="nombre_socio" placeholder="Nombre" value="{{ $socio->nombre_socio}}">
                <label>Apellidos:</label>
                <input type="text" name="apellidos" placeholder="apellidos" value="{{ $socio->apellidos}}">
                <label>Fecha de Nacimiento:</label>
                <input type="text" name="fecha_nacimiento" placeholder="fecha_nacimiento" value="{{ $socio->fecha_nacimiento}}">
                <label>Teléfono:</label>
                <input type="text" name="telefono" placeholder="telefono" value="{{ $socio->telefono}}">
                <label>Dirección:</label>
                <input type="text" name="direccion" placeholder="direccion" value="{{ $socio->direccion}}">
                <label>Padrino:</label>
                <input type="text" name="padrino" placeholder="padrino" value="{{ $socio->padrino}}">
                <label>Motocicleta:</label>
                <input type="text" name="motocicleta" placeholder="motocicleta" value="{{ $socio->motocicleta}}">
                <label>Foto Carnet:</label>
                <input type="text" name="foto_carnet" placeholder="foto_carnet" value="{{ $socio->foto_carnet}}">
                <input type="submit" value="Guardar">
            </form>
        </div>   
    </body>
<html>