@extends('layout.layout')

@section('title', 'Movie Details')

@section('content')
<div>
    <h2>Sono la pagina show</h2>
    <div class="container">
        <div class="card m-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> {{ $movie -> title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie -> original_title }}</h6>
              <p class="card-text">
                <span class="fw-bold fst-italic">Nationality:</span> {{ $movie -> nationality}}
                </p>
              <p class="card-text"> 
                    <div>
                      <span class="fw-bold fst-italic">Date:</span> {{ $movie -> date}}
                    </div>
                    <div>
                      <span class="fw-bold fst-italic">Average Score:</span> {{ $movie -> vote}}
                    </div>
                </p>
            </div>
          </div>
    </div>
</div>
    
@endsection