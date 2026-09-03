<link rel="stylesheet" href="productStyle.css">

<form action="/product" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name">
    
    <label>Preço:</label>
    <input type="text" name="price">
    
    <button type="submit">Salvar</button>
</form>

<button><a href="/product">Veja Produtos Adicionados</a></button>