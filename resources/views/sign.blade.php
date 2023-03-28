<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ePay Invoicing - Sign Up</title>

    
  </head>
  <body style="background: #000428;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
  <nav class="navbar navbar-expand-lg navbar-dark bg-light bg-transparent p-3">
  <div class="container text-light">
    <a class="navbar-brand text-light" href="#">ePay Invoicing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Invoices</a></li>
            <li><a class="dropdown-item" href="#">Payments</a></li>
            <li><a class="dropdown-item" href="#">Estimates</a></li>
            <li><a class="dropdown-item" href="#">Payments</a></li>
            <li><a class="dropdown-item" href="#">Client Portal</a></li>
            <li><a class="dropdown-item" href="#">Time Tracking</a></li>
            <li><a class="dropdown-item" href="#">Expenses</a></li>
            
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-user"></i>Resources
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Business Guides</a></li>
            <li><a class="dropdown-item" href="#">Knowledge Base</a></li>
            
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mobile</a></li>
            <li><a class="dropdown-item" href="#">Intergration</a></li>
            <li><a class="dropdown-item" href="#">Customers</a></li>
            
          </ul>
        </li>

        <li class="nav-item me-2 ms-3">
          <a class="nav-link btn btn-light text-danger" href="{{ url('/') }}">Sign In </a>
        </li>

        <li class="nav-item">
        <a class="nav-link btn btn-danger text-light" href="{{ url('sign') }}">Sign Up</a>
        </li>


        
      </ul>
      <!--form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form-->
    </div>
  </div>
</nav>


<div class="container" style="margin-top: 100px">
  <div class="row mx-auto" style="width: 90%">
  <div class="col-sm-7">
    <div class="card bg-transparent"  style="border: none">
      <div class="card-body text-light">
        <h3 class="card-title fs-1 fw-bold">Free invoicing </h3>
        <h5 class="fs-2">software for</h5>
        <h6 class="fs-3">small businesses</h6>
        <p class="card-text">ePay Invoicing Invoice is online invoicing software that helps you <br>
            craft professional invoices, send payment reminders,<br> 
            keep track of expenses, log your work hours, and get<br> paid faster—all for free!</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body p-4">
        <h5 class="card-title">Experience professional invoicing!</h5>
       
        <div class="form-floating mb-3">
  <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Full Name</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Email Address</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Company Name</label>
</div>

<div class="col-12">
<smal> Your data will be in BofiNet data center.  <a href="#"> Change Location</a></smal>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

<div class="d-grid gap-2 col-12 mx-auto">
        <a href="{{ url('sign') }}" class="btn btn-lg btn-danger mt-3">Sign Up Now </a>
</div>
      </div>
    </div>
  </div>
</div>
</div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>