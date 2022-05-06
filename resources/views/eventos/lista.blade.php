<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <tittle>Laravel<tittle/>
        <style>
            body {
                margin: auto;
                padding: 50px;
            }

            table, td, th {
                border: 1px solid black;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            th {
                height: 70px;
            }

            td {
                height: 30px;
            }

            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <h2>Listado Eventos</h2>
        <table>
            <tr>
                <th>Nombre Evento</th>
                <th>Fecha Inicio</th>
                <th>Descripción</th>
                <th>Colaborador</th>
                <th>Patrocinador</th>
                <th>Usuario</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{ $evento->nombre_evento }}</td>
                    <td>{{ $evento->fecha_inicio }}</td>
                    <td>{{ $evento->descripcion }}</td>
                    <td>{{ $evento->colaborador_id }}</td>
                    <td>{{ $evento->patrocinador_id }}</td>
                    <td>{{ $evento->usuario_id }}</td>
                    <td>{{ $evento->imagen_id }}</td>
                    <td>
                        <a href="/eventos/ver/{{$evento->id}}">Ver</a>
                        <a href="/eventos/editar/{{$evento->id}}">Editar</a>
                        <a href="/eventos/eliminar/{{$evento->id}}" onclick="return eliminarEvento('Eliminar Evento')"> Eliminar</a>
                    </td>
                </tr>
            @endforeach  
        </table>  
        <br>
        <a href="/eventos/crear">Nuevo Evento</a>          
    </body>

    <script>
        function eliminarEvento(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>

<html>