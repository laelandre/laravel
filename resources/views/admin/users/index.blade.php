<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Usuarios </h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Açoes</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>-</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum Usuario no banco</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}
</body>
</html>