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
        <h2>Listado de Galerias</h2>
        <table>
            <tr>
                <th>Imagen</th>
                <th>Evento</th>
                <th>Acciones</th>
            </tr>
            @foreach ($galerias as $galeria)
                <tr>
                    <td>{{ $galeria->imagen }}</td>
                    <td>{{ $galeria->evento_id }}</td>
                    <td>
                        <a href="/galerias/ver/{{$galeria->id}}">Ver</a>
                        <a href="/galerias/editar/{{$galeria->id}}">Editar</a>
                        <a href="/galerias/eliminar/{{$galeria->id}}" onclick="return eliminarGaleria('Eliminar Galeria')"> Eliminar</a>
                    </td>
                </tr>
            @endforeach  
        </table>  
        <br>
        <a href="/galerias/crear">Nueva Imagen</a>          
    </body>

    <script>
        function eliminarGaleria(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>

<html>