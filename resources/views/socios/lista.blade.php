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
        <h2>Listado Socios</h2>
        <table>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apelliods</th>
                <th>Fecha de nacimiento</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Padrino</th>
                <th>Motocicleta</th>
                <th>Foto de carnet</th>
                <th>Acciones</th>
            </tr>
            @foreach ($socios as $socio)
                <tr>
                    <td>{{ $socio->usuario_id }}</td>
                    <td>{{ $socio->nombre_socio }}</td>
                    <td>{{ $socio->apellidos }}</td>
                    <td>{{ $socio->fecha_nacimiento }}</td>
                    <td>{{ $socio->telefono }}</td>
                    <td>{{ $socio->direccion }}</td>
                    <td>{{ $socio->padrino }}</td>
                    <td>{{ $socio->motocicleta }}</td>
                    <td>{{ $socio->foto_carnet }}</td>
                    <td>
                        <a href="{{ route('socios.show', $socio->id) }}">Ver</a>
                        <a href="{{ route('socios.edit', $socio->id) }}">Editar</a>
                        {{ Form::open(['url' => route('socios.destroy', $socio), 'method' => 'delete']) }}
                        <button type="submit" onclick="return eliminarSocio('Eliminar Socio')"> Eliminar</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <a href="{{ route('socios.create')}}">Nuevo Socio</a>
    </body>

    <script>
        function eliminarSocio(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>

<html>
