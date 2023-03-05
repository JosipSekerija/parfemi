<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Parfemi za vas</title>
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  />
</head>

  <body>

 
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  


    <header class="">


      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary text-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Početna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('proizvodi')}}">Proizvodi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('onama')}}">O nama</a>
            </li>
            
            <li class="nav-item" style="right: 0px!important;position: absolute!important;">
                @if (Route::has('login'))

                    @auth
                    

                    <li class="nav-item">
                    <a class="nav-link" href="{{url('prikazikosaricu')}}"><i class="fab fa-opencart"></i> Košarica</a>
                    </li>
                        <x-app-layout> 

                        </x-app-layout>
                    @else
                    <li><a href="{{ route('login') }}" class="nav-link"><i class="fas fa-user"></i> Prijava</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link"><i class="fas fa-registered"></i> Registracija</a></li>
                        @endif
                    @endauth
                   
                @endif
            </li>
            </ul>
        </div>
    </nav>  
</header>
<br><br><br><br><br>
<div class="container">
    <div class="row">
    <div class="col-md-4">
            <div class="product-item">
            <center><img src="https://i.ibb.co/crrcsdj/Whats-App-Image-2023-03-05-at-12-51-17.jpg" alt="Arijan " border="0" style="height: 400px; width: 310px" class="img-fluid center-block"></center>
              <div class="down-content">
                <p>Arijan Delić, dolazim iz Mostara, treća godina računarstva.</p> 
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="product-item">
            <center><img src="https://i.ibb.co/VYXQyzB/Whats-App-Image-2023-03-05-at-17-27-18.jpg" alt="Josip" style="height: 400px; width: 310px" class="img-fluid center-block" border="0"></center>
              <div class="down-content">
                <p>Josip Šekerija, dolazim iz Mostara, treća godina računarstva.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
            <center><img src="https://i.ibb.co/H4t81kb/Whats-App-Image-2023-03-05-at-12-58-10.jpg" alt="Josip" border="0" style="height: 400px; width: 310px" class="img-fluid center-block"></center>
              <div class="down-content">
                <p>Josip Galić, dolazim iz Mostara, treća godina računarstva.</p>
            </div>
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