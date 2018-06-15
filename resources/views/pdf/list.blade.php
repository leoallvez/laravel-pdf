<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Título Opcional</title>
    </head>
    <body>
        <h1>Produtos</h1>
        <ul>
            @forelse($products as $product)
                <li>{{ $product->name }}</li>
            @empty
                <li>Nenhum Produto Cadastrado.</li>
            @endforelse
        </ul>
    </body>
</html>