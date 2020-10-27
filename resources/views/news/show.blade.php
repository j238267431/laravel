<div>
    <h2>
    @foreach($category as $c)
        @if($c['id'] == $categoryId)
            <p>{{ $c['category_name'] }}</p>
        @endif
    @endforeach
    </h2>
    @foreach($news as $n)
        @if($n['categoryId'] == $categoryId)
            <p>
                <a href={{ route('news.category.id', ['category' => $n['categoryId'], 'id' => $n['id']]) }}>
                    {{ $n['title'] }}
                </a>
            </p>
        @endif
    @endforeach
</div>
