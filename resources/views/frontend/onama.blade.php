<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css">
    <script
      src="https://kit.fontawesome.com/9bf143935f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Poppins&display=swap"
      rel="stylesheet"
    />

    <title>O nama</title>
  </head>
  <body>
    <div class="body-wrapper">
      <header>
        <nav class="navbar navbar-expand-sm nav-costum mt-2 mb-3">
          <div class="container-fluid" style="margin: auto; padding: 0">
            <a class="navbar-brand naslovbrend">Prodaja parfema</a>
            <button
              class="navbar-toggler expand-button-costum btn"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target=".navbar-collapse"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"
                ><i
                  class="fa-solid fa-bars fa-lg icon-menu-custom"
                  style="color: #ffb577"
                ></i
              ></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav nav nav-left flex-grow-1 ms-auto">
                <li class="nav-item px-3">
                  <a class="nav-link navlink" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link navlink" href="{{url('proizvodi')}}">Parfemi</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link navlink" href="{{url('onama')}}">O nama</a>
                </li>

                
                <li class="nav-item" style="right: 0px!important;position: absolute!important;">
                  @if (Route::has('login'))
  
                      @auth
                      
  
                      <li class="nav-item">
                      <a class="nav-link navlink text-white " href="{{url('prikazikosaricu')}}"><i class="fab fa-opencart" style="color: #ffb577"></i> Košarica</a>
                      </li>
                          <x-app-layout> 
  
                          </x-app-layout>
                      @else
                      <li class="nav-item px-3"><a href="{{ route('login') }}" class="nav-link navlink"><i class="fa-solid fa-right-to-bracket fa-xs"  style="color: #ffb577"></i> Prijava</a></li>
  
                          @if (Route::has('register'))
                              <li class="nav-item px-3"><a href="{{ route('register') }}" class="nav-link navlink px-3"><i class="fa-regular fa-registered fa-xs"  style="color: #ffb577"></i> Registracija</a></li>
                          @endif
                      @endauth
                     
                  @endif
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <h1 class="naslov mb-5">O nama</h1>
      <main>
        <div class="row mt-2">
          <div class="col-4">
            <div class="card kartica" style="width: 18rem">
              <img src="https://i.ibb.co/H4t81kb/Whats-App-Image-2023-03-05-at-12-58-10.jpg" class="card-img-top " alt="" />
              <div class="card-body">
                <h5 class="card-title kartica-naslov">Josip Galić</h5>
                <p class="card-text">
                  Ja sam Josip Galić. Student sam treće godine računarstva.
                </p>
              </div>
            </div>
          </div>

          <div class="col-4">
            <div class="card kartica" style="width: 18rem">
              <img src="https://i.ibb.co/pXMhLjq/josiprwa.jpg" class="card-img-top "  alt="" />
              <div class="card-body">
                <h5 class="card-title kartica-naslov">Josip Šekerija</h5>
                <p class="card-text">
                  Ja sam Josip Šekerija. Student sam treće godine računarstva.
                </p>
              </div>
            </div>
          </div>


          <div class="col-4">
            <div class="card kartica" style="width: 18rem">
              <img src="https://i.ibb.co/crrcsdj/Whats-App-Image-2023-03-05-at-12-51-17.jpg" class="card-img-top "  alt="" />
              <div class="card-body">
                <h5 class="card-title kartica-naslov">Arijan Delić</h5>
                <p class="card-text">
                  Ja sam Arijan Delič. Student sam treće godine računarstva.
                </p>
              </div>
            </div>
          </div>


           </div>
        </div>
      </main>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
