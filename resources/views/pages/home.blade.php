@extends('layout/app_layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <a class="navbar-brand ps-3" href="#" style="font-size: 14px">Dashboard</a>
             
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <!--a class="btn btn-sm btn-secondary" href="new_customer.html" role="button">Add New </a-->
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </nav>

      <div class="container mt-3"> <!--MAIN CONTAINER--> 

      <div class="row"> <!--FIRST ROW-->
      <div class="col-sm-10">
        <p class="card-text">Total Receivable <span class="float-end"><i class="fa-solid fa-circle-plus text-primary"></i> New</span></p>
        <div class="card" style="border:0px">
          <div class="card-body"><!--CARD BODY--->

            <div class="row "><!--INNER ROW--->
              <div class="col-sm-2"><!--COL 1--->
                <div class="card">
                  <div class="card-body p-2">                   
                    <p class="card-text pb-0">CURRENT</p>
                    <h5 class="card-title">BWP 0.00</h5>  
                  
                                    
                  </div>
                </div>
              </div><!--/COL 1--->
              <div class="col-sm-2"><!--COL 2--->
                <div class="card">
                  <div class="card-body p-2">                   
                    <p class="card-text pb-0 text-danger">OVERDUE  <small class="p-0"> 1 - 15 Days   </small> </p>
                    <h5 class="card-title">BWP 0.00</h5>  
                               
                  </div>
                </div>
              </div><!--/COL 2--->
              <div class="col-sm-2"><!--COL 3--->
                <div class="card">
                  <div class="card-body p-2">                   
                    <p class="card-text pb-0"> <small class="p-0"> 15 - 30 Days   </small> </p>
                    <h5 class="card-title">BWP 0.00</h5>                   
                  </div>
                </div>
              </div><!--/COL 3--->
              <div class="col-sm-2"><!--COL 4--->
                <div class="card">
                  <div class="card-body p-2">                   
                    <p class="card-text pb-0">CURRENT  <small class="p-0"> 31 - 45 Days   </small> </p>
                    <h5 class="card-title">BWP 0.00</h5>                   
                  </div>
                </div>
              </div><!--/COL 4--->
              <div class="col-sm-3"><!--COL 5--->
                <div class="card">
                  <div class="card-body p-2">                   
                    <p class="card-text pb-0">CURRENT  <small class="p-0"> Above 45 Days   </small> </p>
                    <h5 class="card-title">BWP 0.00</h5>                   
                  </div>
                </div>
              </div><!--/COL 5--->
            </div><!--/INNER ROW--->
          


          </div><!--/CARD BODY--->
        </div>
      </div>
      
    </div><!--/FIRST ROW-->

    <div class="col-sm-10 mt-3"><!-- SECOND ROW -->
    <div class="card">
      <div class="card-header">
        <span class="fs-5">Sales and Expenses <i class="fa-solid fa-circle-info text-secondary fs-6" title="Displays total sales, receipts and expenses for the current year"></i></span>

        <div class="dropdown float-end">
          <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            This Fiscal Year
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#"> This Fiscal Year</a></li>
            <li><a class="dropdown-item" href="#">  Previous Fiscal Year</a></li>
            <li><a class="dropdown-item" href="#">Last 12 Months</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body"> <!--SECOND ROW BODY-->

        <div class="row"><!--INER ROW CONTAINER-->
          <div class="col-sm-9">
            <div class="card" style="border: 0px">
              <div class="card-body"><!---GRAPH GOES HERE--->
                
              </div><!---/GRAPH GOES HERE--->
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="border: 0px; border-left: 1px solid #ddd; border-radius: 0px;">
              <div class="card-body">
                <div class="text-end">
                <p class="card-text text-primary">Total Sales</p>
                <h5 class="card-title fw-bold">BWP 234 899.00</h5>
                </div>

                <div class="text-end mt-4">
                  <p class="card-text text-success lh-1">Total Receipts</p>
                  <h5 class="card-title fw-bold lh-1">BWP 195 899.00</h5>
                  </div>

                  <div class="text-end mt-4">
                    <p class="card-text text-danger">Total Expenses</p>
                    <h5 class="card-title fw-bold">BWP 949 231.00</h5>
                    </div>
               
               
              </div>
            </div>
          </div>
        </div><!--/INER ROW CONTAINER-->
       


      </div><!--/SECOND ROW BODY-->
    </div>
  </div><!-- /SECOND ROW -->




  </div><!--/MAIN CONTAINER--> 














          @endsection