<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=" {{asset('css/dataTables.bootstrap5.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <title>@yield('title')</title>
    <title>Dashboard | ePay - Invoicing</title>

    <style>
      .sysSidebar{
        background: #11998e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


      }
      #topNav{
        background: #f1f1f1;
        border-bottom: 1px solid #ddd;
      }
      </style>
  </head>
  <body style="font-size:12px">
    <!-- top navigation bar -->
    @include('layout/top_nav')
    <!-- top navigation bar -->
    <!-- offcanvas -->
   @include('layout/side_menu')
    <!-- offcanvas -->

    <main class="mt-5 pt-3">
      <div class="container-fluid">  

       @yield('content')

       



      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
  </body>
</html>
