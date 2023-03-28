@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <!--a class="navbar-brand" href="#">Customers</a-->
              <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Estimates
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">Draft</a></li>
                  <li><a class="dropdown-item" href="#">Sent</a></li>
                  <li><a class="dropdown-item" href="#">Clients Viewed</a></li>
                  <li><a class="dropdown-item" href="#">Accepted</a></li>
                  <li><a class="dropdown-item" href="#">Invoiced</a></li>
                  <li><a class="dropdown-item" href="#">Declined</a></li>
                  <li><a class="dropdown-item" href="#">Expired</a></li>
                  
                </ul>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="btn btn-sm btn-secondary" href="{{url('pages.add_new_estimate')}}" role="button">Add New </a>
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
      <th scope="col">Date</th>
      <th scope="col">Estimate Number</th>
      <th scope="col">Reference Number</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Status</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>
      
      <th scope="row">
         <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
        </div>
      </th>
      <td>23 Mar 2022</td>
      <td><a href="{{ url('pages.estimates_list_view') }}">EST - 001</a></td>
      <td>Fiber Lite Internet</td>
      <td>Mathias & Associates</td>
      <td>Sent</td> 
      
      <td>BWP 345 000.00</td>

    </tr>
    <tr>
      <th scope="row">
         <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
        </div>
      </th>
      <td>25 Mar 2022</td>
      <td>EST - 002</td>
      <td>Fiber Splicing</td>
      <td>Morongwa Tours</td>
      <td>Sent</td>      
      <td>BWP 789 000.00</td>
    </tr>
    
  </tbody>
</table>

</div>






          @endsection