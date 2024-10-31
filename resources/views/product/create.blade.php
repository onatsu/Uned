<form action="/product/create" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="number" name="price">

    <input type="submit" value="create">
</form>
