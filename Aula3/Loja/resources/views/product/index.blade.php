<link rel="stylesheet" href="productStyle.css">

<h1>Lista de Produtos</h1>
<ul>
    @foreach($products as $product)
        <li>
            {{ $product->name }} - R$ {{ $product->price }}
        
            <!-- Link para a página de edição -->
            <a href="/product/{{ $product->id }}/edit">Editar</a>

            <form action="/product/{{ $product->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
        </li>
    @endforeach
</ul>
<button><a href="/product/create">Clique para Voltar</a></button>