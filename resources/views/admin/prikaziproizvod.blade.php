<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parfemi za vas</title>

    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">
 
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner1" id="proBanner1">
        <div class="col-md-12 p-0 m-0">

            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                

            </div>
            <div class="d-flex align-items-center justify-content-between">

            </div>
          </div>
        </div>
      </div>
    
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
              
                  
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Administrator</h5>
                  <span></span>
                </div>
              </div>

            </div>
            <li>
            <a class="nav-link">
              <span class="menu-icon" >
                <h5 style="padding-left: 20px">Opcije</h5>
              </span>
            </a>
          </li>
   
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('proizvod')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Dodavanje proizvoda</span>
            </a>
          </li>

                    <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('prikazinarudzbu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Narud??be</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('prikaziproizvod')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Svi proizvodi</span>
            </a>
          </li>
        </ul>
      </nav>
      
 
    <div style="padding-bottom: 20px" class="container-fluid page-body-wrapper">
        <div class="container" align="center">
          <h1>Proizvodi</h1>
          <table>
            <tr style="background-color: #557A95;">
              <td style="padding:20px">Naslov</td>
              <td style="padding:20px">Opis</td>
              <td style="padding:20px">Koli??ina</td>
              <td style="padding:20px">Cijena</td>
              <td style="padding:20px">Slika</td>
              <td style="padding:20px">Osvje??i</td>
              <td style="padding:20px">Obri??i</td>
            </tr>
            @foreach($data as $proizvod)
            <tr align="center" style="background-color: #5D5C61; align-items:center ;">
              <td>{{$proizvod->naziv}}</td>
              <td>{{$proizvod->opis}}</td>
              <td>{{$proizvod->kolicina}}</td>
              <td>{{$proizvod->cijena}}</td>
              <td><img height="100" width="100" src="/productimage/{{$proizvod->slika}}"></td>
              <td> <a class="btn btn-primary" href="{{url('osvjeziproizvod', $proizvod->id)}}">Osvje??i</td>
              <td> <a class="btn btn-danger" href="{{url('obrisiproizvod',$proizvod->id)}}">Obri??i</td>
            </tr>

            @endforeach
          </table>
        </div>
    </div>
 
        </div>
 
      </div>

    </div>

    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
 
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>

    <script src="admin/assets/js/dashboard.js"></script>

  </body>
</html>