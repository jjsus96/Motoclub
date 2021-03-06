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
        <a href="/colaboradores">Ver listado de Colaboradores</a>
        <br>
        <h2>Editar usuario</h2>
        <div>
            <form action="/colaboradores/editar/{{ $colaborador->id}}" method ="POST">
                @csrf
                {{ method_field('PUT') }}
                <label>Nombre:</label>
                <input type="text" name="nombre_colaborador" placeholder="nombre colaborador" value="{{ $colaborador->nombre_colaborador}}">
                <label>Telefono:</label>
                <input type="text" name="telefono_colaborador" placeholder="telefono colaborador" value="{{ $colaborador->telefono_colaborador}}">
                <label>Email:</label>
                <input type="text" name="email_colaborador" placeholder="email colaborador" value="{{ $colaborador->email_colaborador}}">
                <input type="submit" value="Guardar">
            </form>
        </div>   
    </body>
<html>