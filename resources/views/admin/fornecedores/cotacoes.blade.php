@include('layout.base')
    <h1>Cotações</h1>
    <table class="table">
        <thead>
            <tr>
                <th>CNPJ Fornecedor</th>
                <th>Código Comprador</th>
                <th>Código Produto</th>
                <th>Código Produto Cliente</th>
                <th>Descrição Produto</th>
                <th>Quantidade Pedida</th>
                <th>Segmento</th>
                <th>Unidade Medida</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cotacoes as $cotacao)
                <tr>
                    <td>{{ $cotacao->cnpjFornecedor }}</td>
                    <td>{{ $cotacao->detalhesCotacao->codigoComprador }}</td>
                    <td>{{ $cotacao->detalhesCotacao->codigoProduto }}</td>
                    <td>{{ $cotacao->detalhesCotacao->codigoProdutoCliente }}</td>
                    <td>{{ $cotacao->detalhesCotacao->descricaoProduto }}</td>
                    <td>{{ $cotacao->detalhesCotacao->quantidadePedida }}</td>
                    <td>{{ $cotacao->detalhesCotacao->segmento }}</td>
                    <td>{{ $cotacao->detalhesCotacao->unidadeMedida }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

