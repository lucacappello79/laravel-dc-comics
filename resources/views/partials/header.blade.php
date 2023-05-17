<header class="container text-center">

  <div class="header-wrapper">

    <div class="logo">
      <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
    </div>  
    
    <div class="links">
      <ul>
        <li><a href="{{route('homepage')}}">Home</a></li>
        <li><a href="{{route('comics.create')}}">Create</a></li>
        <li><a href="{{route('comics.index')}}">Comics</a></li>
        <li class="active">Movies</li>
        <li>Tv</li>
        <li>Games</li>
        <li>Collectibles</li>
        <li>Videos</li>
        <li>Fans</li>
        <li>News</li>
        <li>Shop</li>
      </ul>
    </div>

  </div>

</header>
