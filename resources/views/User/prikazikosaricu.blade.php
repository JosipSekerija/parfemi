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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
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

    <title>Home</title>
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
                      
  
                      <li class="nav-item ">
                      <a class="nav-link navlink text-white " href="{{url('prikazikosaricu')}} " ><i class="fab fa-opencart" style="color: #ffb577"></i> Košarica</a>
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



<div style="padding:100px" align="center">

    <table style="background-color: black">
        <tr>
            <td style="padding: 20px; font-size:20px; color:white">Naziv proizvoda</td>
            <td style="padding: 20px; font-size:20px; color:white">Količina</td>
            <td style="padding: 20px; font-size:20px; color:white">Cijena</td>
            <td style="padding: 20px; font-size:20px; color:white">Uredi</td>
        </tr>
   
        <form action="{{url('narudzba')}}" method="POST">


          @csrf
   
          @foreach($kosarica as $kosarice)
        <tr>
            <td style="padding: 20px; font-size:20px; color:white">
            <input type="text" name="nazivproizvoda[]" value="{{$kosarice->naziv_proizvoda}}" hidden="">{{$kosarice->naziv_proizvoda}}</td>
            <td style="padding: 20px; font-size:20px; color:white">
            <input type="text" name="kolicina[]" value="{{$kosarice->kolicina}}" hidden="">{{$kosarice->kolicina}}</td>
            <td style="padding: 20px; font-size:20px; color:white">
            <input type="text" name="cijena[]" value="{{$kosarice->cijena}}" hidden="">{{$kosarice->cijena}}</td>
            <td style="padding: 20px; font-size:20px; color:white">
            <a class="btn btn-danger" href="{{url('obrisi',$kosarice->id)}}">Obriši</a>
           </td>
        </tr>
        @endforeach
        
    </table>
    <br>
    <button class="btn dugme" style="height: 30px;width: 100px;;align-self: center;text-align: center; padding-bottom: 10px;">Potvrdi</button>
    
    </form>
 
</div>
   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                  
      if(! cleared[t.id]){                     
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
