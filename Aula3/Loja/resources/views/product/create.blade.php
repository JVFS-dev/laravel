<form action="/product" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name">
    
    <label>Preço:</label>
    <input type="text" name="price">
    
    <button type="submit">Salvar</button>
</form>