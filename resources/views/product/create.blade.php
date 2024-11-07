<form action="{{route('product.store')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="number" name="price">
    <input type="number" name="category_id">

    <input type="submit" value="create">
</form>
