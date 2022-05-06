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
        <a href="/eventos">Ver listado de usuarios</a>
        <br>
        <h2>Editar usuario</h2>
        <div>
            <form action="/eventos/editar/{{ $evento->id}}" method ="POST">
                @csrf
                {{ method_field('PUT') }}
                <label>Nombre Evento:</label>
                <input type="text" name="nombre_evento" placeholder="Nombre Evento" value="{{ $evento->nombre_evento}}">
                <label>Fecha Inicio:</label>
                <input type="text" name="fecha_inicio" placeholder="Fecha Inicio" value="{{ $evento->fecha_inicio}}">
                <label>Descripción:</label>
                <input type="text" name="descripcion" placeholder="Descripción" value="{{ $evento->descripcion}}">
                <label>Colaborador:</label>
                <input type="text" name="colaborador_id" placeholder="Colaborador" value="{{ $evento->colaborador_id}}">
                <label>Patrocinador:</label>
                <input type="text" name="patrocinador_id" placeholder="Patrocinador" value="{{ $evento->patrocinador_id}}">
                <label>Usuarios:</label>
                <input type="text" name="usuario_id" placeholder="Usuarios" value="{{ $evento->usuario_id}}">
                <label>Imagen:</label>
                <input type="text" name="imagen_id" placeholder="Imagen" value="{{ $evento->imagen_id}}">
                <input type="submit" value="Guardar">
            </form>
        </div>   
    </body>
<html>