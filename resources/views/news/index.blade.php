<div>
    <h2>Category list</h2>
    @foreach($category as $c)
        <p><a href = {{ route('news.category', ['category' => $c['id']]) }}>{{ $c['category_name'] }}</a></p>
    @endforeach

</div>
