@extends('layout.app_layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
  <div class="container-fluid">
    <a class="navbar-brand ms-2" href="#" style="font-size: 14px">Reports</a>
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
 

<div class="container-fluid mt-3">

  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sales Report</h5>
          <a href="{{ url('pages.salesbycustomer_report') }}" class="link-primary">Sales by Customer</a><br>
          <a href="#" class="link-primary">Sales by Item</a><br>
          <a href="#" class="link-primary">Sales by Sales Person</a>
          


        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Receivables</h5>
          <a href="#" class="link-primary">Customer Balances</a><br>
          <a href="#" class="link-primary"> AR Aging Summary</a><br>
          <a href="#" class="link-primary">AR Aging Details</a><br>
          <a href="#" class="link-primary">Invoice Details</a><br>
          <a href="#" class="link-primary"> Estimate Details</a><br>
          <a href="#" class="link-primary"> Bad Debts</a><br>
          <a href="#" class="link-primary">Receivable Summary</a><br>
          <a href="#" class="link-primary">Receivable Details</a><br>
            
                            
          
                 </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Taxes</h5>
          <a href="#" class="link-primary">Tax Summary</a><br>
        </div>
      </div>
    </div>
  </div>



</div>






          @endsection