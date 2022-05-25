<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success bg-gradient">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home')}}">Movies Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" {{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                {{-- collego href al nome che ho dato in web.php tramite route() --}}
                <a class="nav-link" href="{{ route('movies') }}">Movies List</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</header>