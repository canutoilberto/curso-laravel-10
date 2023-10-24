<h1>Suporte</h1>

<a href="{{ route('supports.create') }}">Novo suporte</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>description</th>
        <th></th>
    </thead>
    <tbody>

        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    >
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
