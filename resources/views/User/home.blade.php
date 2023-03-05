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

 
  


    <header>
      


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
                    <a class="nav-link" href="{{url('prikazikosaricu')}}"><i class="fab fa-opencart"></i> Košarica[{{$count}}]</a>
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

    <p class="h1 mt-5 pt-6 text-center">Online prodaja parfema</p>
    <figure class="text-center p-6">
      <blockquote class="blockquote">
        <p>Mjesto gdje možete kupiti parfem.</p>
        <a class="text-center btn btn-dark" href="https://drive.google.com/file/d/1NGL7ExJLBlrBOzkituzHj6rC5_s_y1a6/view?usp=sharing">Vizija</a>
      </blockquote>
      <figcaption class="blockquote-footer">
         <cite title="Source Title">Parfemi za vas</cite>
         
      </figcaption>
    </figure>
    


    </header>

   

   


    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Najnoviji parfemi</h2>
              <a href="{{url('proizvodi')}}">Svi parfemi <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          @foreach($data as $proizvod)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" class="img-fluid" src="/productimage/{{$proizvod->slika}}" alt=""></a>
              <div class="down-content">
                <h4>{{ $proizvod->naziv }}</h4>
                <h6><br>{{ $proizvod->cijena }}kn</h6>
                <p>{{ $proizvod->opis }}</p>
                <form action="{{url('dodaj',$proizvod->id)}}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control"  style="width:100px" name="kolicina">
                <br>

                  <input style="background-color: #2A93D5" class="btn btn-primary" type="submit" value="U košaricu">
              </form>
              </div>
            </div>
          </div>
        @endforeach
         


        </div>
      </div>
    </div>

    


   

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">

            </div>
          </div>
        </div>
      </div>
    </footer>


  
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
    


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
