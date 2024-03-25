@vite('resources/js/app.js')
<header class="d-flex flex-row-reverse gap-3">
  <p class="text-light fw-medium me-5">ADDITIONAL DC SITES</p><p class="text-light fw-medium me-5">DC POWER VISA &#174;</p> 
</header>
<main>
    <div class="container d-flex align-items-center justify-content-between py-5">
        <div id="logo">
            <img src="{{Vite::asset('images/dc-logo.png')}}" alt="">
        </div>
        <div id="header-navbar">
            <ul>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-medium">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">COMICS</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">MOVIES</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">TV</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">GAMES</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">COLLECTIBLES</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">VIDEOS</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">FANS</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">NEWS</a>
            </li>          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SHOP
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Comics</a></li>
                <li><a class="dropdown-item" href="#">Figures</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Gifts</a></li>
              </ul>
            </li>
    
          </ul>
    
        </div>
      </div>
    </nav>
        </div>
        <div id="header-searchbar">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="jumbotron">
      <img src="{{Vite::asset('images/jumbotron.jpg')}}" alt="" class="img-fluid jumbo">
    </div>

</body>

</html>