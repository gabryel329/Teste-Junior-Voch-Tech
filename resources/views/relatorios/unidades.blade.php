<h1>Relat�rio Total de Colaboradores por Unidade</h1>

<table>
    <thead>
        <tr>
            <th>Nome Fantasia</th>
            <th>Raz�o Social</th>
            <th>CNPJ</th>
            <th>Total de Colaboradores</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($relatorio as $unidade)
            <tr>
                <td>{{ $unidade->nome_fantasia }}</td>
                <td>{{ $unidade->razao_social }}</td>
                <td>{{ $unidade->cnpj }}</td>
                <td>{{ $unidade->colaboradores_count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
