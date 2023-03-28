@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <!--a class="navbar-brand" href="#">Customers</a-->
              <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Customers
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">All Customers</a></li>
                  <li><a class="dropdown-item" href="#">Active Customers</a></li>
                  <li><a class="dropdown-item" href="#">Overdue Customers</a></li>
                  <li><a class="dropdown-item" href="#">Unpaid Customers</a></li>
                </ul>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="btn btn-sm btn-secondary" href="{{url('pages.add_new_customer')}}" role="button">Add New </a>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </nav>


          <div class="container-fluid">


          <table class="table">
  <thead>
    <tr>
      <th scope="col">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 
</div>
      </th>
      <th scope="col">Name</th>
      <th scope="col">Company Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Work Phone</th>
      <th scope="col">Receivable</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
         <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
        </div>
      </th>
      <td>Mathias Kanjabanga</td>
      <td>Mathias & Associates</td>
      <td>hacks@gmail.com</td>
      <td>311789855</td>
      <td>BWP 345 000.00</td>
    </tr>
    <tr>
      <th scope="row">
         <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
        </div>
      </th>
      <td>Mathias Kanjabanga</td>
      <td>Mathias & Associates</td>
      <td>hacks@gmail.com</td>
      <td>311789855</td>
      <td>BWP 345 000.00</td>
    </tr>
  </tbody>
</table>

</div>






          @endsection