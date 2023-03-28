@extends('layout.app_layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
  <div class="container-fluid">
    <a class="navbar-brand ms-2" href="#" style="font-size: 14px">Sales Receipts</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <li class="nav-item">
            <a class="btn btn-sm btn-secondary" href="{{url('pages.add_new_salesreceipt')}}" role="button">Add New </a>
          </li>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-2" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <!--a class="navbar-brand" href="#">Customers</a-->
              <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="fw-bold"> View By:</span> Period: All
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Week</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Quater</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
              
                  
                </ul>
              </div>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>        


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
      <th scope="col">Receipt Date</th>
      <th scope="col">Sales Number</th>
      <th scope="col">Reference</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Pay Mode</th>
      
      <th scope="col">Amount</th>
      <th scope="col">Created By</th>
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
      <td><a href="{{ url('pages.salesreceipts_list_view') }}">SR - 001</a></td>
      <td>Fiber Lite Internet</td>
      <td>Mathias & Associates</td>
      <td>Cash</td> 
      <td>P211 900.00</td>   
      <td>Thato Obuseng</td>
     

    </tr>
    <tr>
      <th scope="row">
         <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
        </div>
      </th>
      <td>25 Mar 2022</td>
      <td><a href="{{ url('pages.salesreceipts_list_view') }}">SR - 002</a></td>
      <td>Fiber Splicing</td>
      <td>Morongwa Tours</td>
      <td>EFT</td> 
      <td>P 234 900.00</td>      
      <td>Raymond Mmusi</td>
      
    </tr>
    
  </tbody>
</table>

</div>






          @endsection