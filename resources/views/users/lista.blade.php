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
        <h2>Listado usuarios</h2>
        <table>
            <tr>
                <th>usuario</th>
                <th>teléfono</th>
                <th>email</th>
                <th>contraseña</th>
                <th>avatar</th>
                <th>Acciones</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->usuario }}</td>
                    <td>{{ $user->telefono }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->avatar }}</td>
                    <td>
                        <a href="/users/ver/{{$user->id}}">Ver</a>
                        <a href="/users/editar/{{$user->id}}">Editar</a>
                        <a href="/users/eliminar/{{$user->id}}" onclick="return eliminarUser('Eliminar Usuario')"> Eliminar</a>
                    </td>
                </tr>
            @endforeach  
        </table>  
        <br>
        <a href="/users/crear">Nuevo usuario</a>          
    </body>

    <script>
        function eliminarUser(value) {
            action = confirm(value) ? true : event.preventDefault()
        }
    </script>

<html>