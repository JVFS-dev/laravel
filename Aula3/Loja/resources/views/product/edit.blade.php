<h1>Editar Produto</h1>

<form action="/product/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Nome:</label>
    <input type="text" name="name" value="{{ $product->name }}">
    
    <label>Preço:</label>
    <input type="text" name="price" value="{{ $product->price }}">
    
    <button type="submit"><a href="/product">Salvar Alterações</a></button>
</form>