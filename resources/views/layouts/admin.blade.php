<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ URL :: asset ('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL :: asset ('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ URL :: asset ('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   @include('layouts.section.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- TopBar -->
       @include('layouts.section.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            @yield('content')

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
     @include('layouts.section.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ URL :: asset ('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ URL :: asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL :: asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ URL :: asset ('js/ruang-admin.min.js')}}"></script>
  <script src="{{ URL :: asset ('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ URL :: asset ('js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>