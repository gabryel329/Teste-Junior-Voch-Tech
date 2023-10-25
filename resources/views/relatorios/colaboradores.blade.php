<h1>Relatório de Colaboradores</h1>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Unidade</th>
            <th>Cargo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colaboradores as $colaborador)
            <tr>
                <td>{{ $colaborador->nome }}</td>
                <td>{{ $colaborador->cpf }}</td>
                <td>{{ $colaborador->email }}</td>
                <td>{{ $colaborador->unidade->nome_fantasia }}</td>
                <td>{{ $colaborador->cargo->cargo }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
