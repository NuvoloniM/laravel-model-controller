@extends('layout.layout')

@section('title', 'Movies List')

@section('content')
    <div class="container py-5">
        <div class="row row-cols-4 gy-5">
            {{-- faccio un ciclo foreach nel database implementando la funzione if/else --}}
            @forelse ($movies as $key => $movie)
                <div class="col ">
                    <div class="card text-center">
                        <div class="card-body">
                        <h5 class="card-title">{{ $movie -> title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie -> original_title }}</h6>
                        {{-- tramite link che con route mi manda alla singola pagina, mi passo l'indice del film singolo --}}
                        <a href=" {{ route('movie', ['id' => $key+1])}} " class="card-link">Vai alla Descrizione</a>
                        </div>
                    </div>
                </div>
            @empty
                @php   
                    http_response_code(404);
                    include('my_404.php');
                    die();
                @endphp
            @endforelse
            
        </div>
    </div>
@endsection