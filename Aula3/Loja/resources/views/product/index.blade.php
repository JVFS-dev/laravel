<link rel="stylesheet" href="productStyle.css">

<h1>Lista de Produtos</h1>
<table style="border: 1;">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            {{ $product-
            <td>{{ $product->id }}</td>>name }} - R$ {{ $product->price }}
            <td>{{ $product->name }}</td>
            <td>R$ {{ $product->price }}</td>

            <!-- Link para a página de edição -->
            <a href="/product/{{ $product->id }}/edit">Editar</a>

            <form action="/product/{{ $product->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
<button><a href="/product/create">Clique para Voltar</a></button>