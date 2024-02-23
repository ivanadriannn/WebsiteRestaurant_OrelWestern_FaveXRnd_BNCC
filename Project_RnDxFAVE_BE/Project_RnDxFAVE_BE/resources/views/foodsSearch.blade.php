@if(count($foods))
    <ul>
        @foreach($foods as $food)
            <li>{{ $food->name }}</li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
