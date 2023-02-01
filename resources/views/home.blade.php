@include('layouts.base')
@section('content')
<div class="container-fluid d-flex text-center justify-content-around">
    <ul>
        <h3>Titolo</h3>
        @foreach ($movies as $movie)
           <li>
            {{$movie['title']}}
           </li>
        @endforeach
    </ul>
    <ul>
        <h3>Titolo originale</h3>
        @foreach ($movies as $movie)
            <li>
                {{$movie['original_title']}}    
            </li>   
        @endforeach
    </ul>
    <ul>
        <h3>Nazionalità</h3>
        @foreach ($movies as $movie)
            <li>
                {{$movie['nationality']}}    
            </li>   
        @endforeach
    </ul>
    <ul>
        <h3>Data di Uscita</h3>
        @foreach ($movies as $movie)
            <li>
                {{$movie['date']}}    
            </li>   
        @endforeach
    </ul>
    <ul>
        <h3>Voto</h3>
        @foreach ($movies as $movie)
            <li>
                {{$movie['vote']}}    
            </li>   
        @endforeach
    </ul>
</div>
@endsection