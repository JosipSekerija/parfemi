<x-app-layout>

</x-app-layout>

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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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

    <title>Prodaja Parfema</title>
  </head>

  <body>
    <div
      class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar"
      style="width: 280px"
    >
      <a
        href="/"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"
      >
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Admin Panel</span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-3">
          <a href="{{url('proizvod')}}" class="nav-link dugme" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home"></use>
            </svg>
            Dodavanje proizvoda
          </a>
        </li>
        <li class="nav-item mb-3">
          <a href="{{url('prikazinarudzbu')}}" class="nav-link dugme">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#speedometer2"></use>
            </svg>
            Narudžbe
          </a>
        </li>
        <li class="nav-item mb-3">
          <a href="{{url('prikaziproizvod')}}" class="nav-link dugme">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table"></use>
            </svg>
            Svi proizvodi
          </a>
        </li>
      </ul>
      <hr />
    </div>
    <main>
      <main class="dashboard-main">
        <div class="container-fluid page-body-wrapper">
          <div class="container">
            <h1>Svi proizvodi</h1>
            <table>
              <tr style="background-color: #ffb577" class="text-black">
                <td style="padding:15px">Naslov</td>
              <td style="padding:15px">Opis</td>
              <td style="padding:15px">Količina</td>
              <td style="padding:15px">Cijena</td>
              <td style="padding:15px">Slika</td>
              
              <td style="padding:15px">Obriši</td>
              </tr>
              @foreach($data as $proizvod)
              <tr align="center" class="bg-dark">
                <td>{{$proizvod->naziv}}</td>
                <td>{{$proizvod->opis}}</td>
                <td>{{$proizvod->kolicina}}</td>
                <td>{{$proizvod->cijena}}</td>
                <td><img height="50" width="50" src="/productimage/{{$proizvod->slika}}"></td>
                
                <td> <a class="btn dugme" href="{{url('obrisiproizvod',$proizvod->id)}}">Obriši</td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
        
    </main>
  </body>
</html>
