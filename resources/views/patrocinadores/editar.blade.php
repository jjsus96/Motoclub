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
        <a href="/patrocinadores">Ver listado de Patrocinadores</a>
        <br>
        <h2>Editar patrocinador</h2>
        <div>
            <form action="/patrocinadores/editar/{{ $patrocinador->id}}" method ="POST">
                @csrf
                {{ method_field('PUT') }}
                <label>Nombre:</label>
                <input type="text" name="nombre_patrocinador" placeholder="nombre patrocinador" value="{{ $patrocinador->nombre_patrocinador}}">
                <label>Telefono:</label>
                <input type="text" name="telefono_patrocinador" placeholder="telefono patrocinador" value="{{ $patrocinador->telefono_patrocinador}}">
                <label>Email:</label>
                <input type="text" name="email_patrocinador" placeholder="email patrocinador" value="{{ $patrocinador->email_patrocinador}}">
                <input type="submit" value="Guardar">
            </form>
        </div>   
    </body>
<html>