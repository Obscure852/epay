@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <!--a class="navbar-brand" href="#">Customers</a-->
              <div class="dropdown">
                <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Items
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">All</a></li>
                  <li><a class="dropdown-item" href="#">active</a></li>
                  <li><a class="dropdown-item" href="#">Inactive</a></li>
                  <li><a class="dropdown-item" href="#">Sales</a></li>
                  <li><a class="dropdown-item" href="#">Serices</a></li>
                </ul>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="btn btn-sm btn-secondary" href="{{url('pages.add_new_item')}}" role="button">Add New </a>
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
<th scope="col">Description</th>
<th scope="col">Rate</th>
<th scope="col">Usage</th>

</tr>
</thead>
<tbody>
<tr>
<th scope="row">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
</div>
</th>
<td>Connecta 5Mbps</td>
<td>Internet services</td>
<td>BWP 345.00</td>
<td>Mbps</td>

</tr>
<tr>
<th scope="row">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> 
</div>
</th>
<td>Connecta 10Mbps</td>
<td>Internet services </td>
<td>BWP 795.00</td>
<td>Mbps</td>

</tr>
</tbody>
</table>

</div>





          @endsection