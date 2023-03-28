@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <!--a class="navbar-brand" href="#">Customers</a-->
              <!--div class="dropdown">
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
              </div-->
              <div class="col-sm-3">
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>This Month</option>
                <option value="1">Today</option>
                <option value="2">This Month</option>
                <option value="3">This Quater</option>
                <option value="3">This Year</option>
                <option value="3">Yesterday</option>
                <option value="3">Previous Week</option>
                <option value="3">Previous Month</option>
                <option value="3">Previous Quater</option>
                <option value="3">Previous Year</option>
                <option value="3">Custom</option>
              </select>
            </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="btn btn-sm btn-secondary me-2" href="" role="button">
                      <i class="fa-solid fa-print"></i> 
                      Print 
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="btn-group dropstart">
                      <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Export As
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">PDF</a></li>
                        <li><a class="dropdown-item" href="#">XLSX (Microsoft Excel)</a></li>
                        <li><a class="dropdown-item" href="#">XLS (Microsoft Excel 1997 - 2004 Compatible)</a></li>
                        <li><a class="dropdown-item" href="#">CSV (Comma Separated Value)</a></li>
                      </ul>
                    </div>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid">

            <div class="text-center mt-5">
              <p class="text-center fs-5 lh-1">The Dialog Group</p>
              <p class="text-center fs-4 lh-1">Sales By Customer Report</p>
              <p class="text-center fs-6 lh-1">From 01 April To 30 April</p>
            </div>

<div class="mt-4">
<table class="table">
<thead>
<tr>

<th scope="col">Company Name</th>
<th scope="col">Invoice Count</th>
<th scope="col">Sales</th>
<th scope="col">Sales With Tax</th>

</tr>
</thead>
<tbody>
<tr>

<td>Polana Crunches</td>
<td>4</td>
<td>BWP 12 345.00</td>
<td>BWP 12 345.00</td>

</tr>
<tr>

<td>Mindset Shifts</td>
<td>1 </td>
<td>BWP 795.00</td>
<td>BWP 795.00</td>

</tr>
</tbody>
</table>
</div>

</div>





          @endsection