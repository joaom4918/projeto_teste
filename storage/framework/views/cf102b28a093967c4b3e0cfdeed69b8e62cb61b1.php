<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php $__currentLoopData = $cotacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cotacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cotacao->cnpjFornecedor); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->codigoComprador); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->codigoProduto); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->codigoProdutoCliente); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->descricaoProduto); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->quantidadePedida); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->segmento); ?></td>
                    <td><?php echo e($cotacao->detalhesCotacao->unidadeMedida); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH /opt/lampp/htdocs/projeto_teste/resources/views/admin/fornecedores/cotacoes.blade.php ENDPATH**/ ?>