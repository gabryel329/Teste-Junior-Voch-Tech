
    <h1>Ranking de Colaboradores Melhores Avaliados</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Unidade</th>
                <th>Cargo</th>
                <th>Nota de Desempenho</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargocolaboradores as $colaborador)
                <tr>
                    <td>{{ $colaborador->nome }}</td>
                    <td>{{ $colaborador->cpf }}</td>
                    <td>{{ $colaborador->email }}</td>
                    <td>{{ $colaborador->unidade->nome_fantasia }}</td>
                    <td>{{ $colaborador->cargo->cargo }}</td>
                    <td>{{ $colaborador->pivot->nota_desempenho }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
