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
        <a href="/users">Ver listado de usuarios</a>
        <br>
        <h2>Editar usuario</h2>
        <div>
            <form action="/users/editar/{{ $user->id}}" method ="POST">
                @csrf
                {{ method_field('PUT') }}
                <label>Usuario:</label>
                <input type="text" name="usuario" placeholder="usuario" value="{{ $user->usuario}}">
                <label>Teléfono:</label>
                <input type="text" name="telefono" placeholder="teléfono" value="{{ $user->telefono}}">
                <label>Email:</label>
                <input type="text" name="email" placeholder="email" value="{{ $user->email}}">
                <label>Contraseña:</label>
                <input type="text" name="contraseña" placeholder="contraseña" value="{{ $user->password}}">
                <label>Avatar:</label>
                <input type="text" name="avatar" placeholder="avatar" value="{{ $user->avatar}}">
                <input type="submit" value="Guardar">
            </form>
        </div>   
    </body>
<html>