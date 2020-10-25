<div>
    <h3>News</h3>
    @foreach($news as $n)
        @if($n['id'] == $id)
            <p> {{ $n['description'] }} </p>
        @endif
    @endforeach
</div>
