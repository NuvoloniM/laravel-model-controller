@extends('layout.layout')

@section('title', 'Movie Details')

@section('content')
    <h2>Sono la pagina show</h2>
    <div class="container">
        <div class="card m-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> {{ $movie -> title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie -> original_title }}</h6>
              <p class="card-text"> {{ $movie -> nationality}}</p>
              <p class="card-text"> 
                    <div>
                      {{ $movie -> date}}
                    </div>
                    <div>
                      {{ $movie -> vote}}
                    </div>
                </p>
            </div>
          </div>
    </div>
@endsection