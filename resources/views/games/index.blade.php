<!DOCTYPE html>
<html>
<head>
    <title>Lista de Apuestas</title>
</head>
<body>
    <h1>Lista de Apuestas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Juego</th>
                <th>Fecha</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($apuestas as $apuesta)
                <tr>
                    <td>{{ $apuesta->id }}</td>
                    <td>{{ $apuesta->juego->nombre }}</td>
                    <td>{{ $apuesta->fecha }}</td>
                    <td>{{ $apuesta->monto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
