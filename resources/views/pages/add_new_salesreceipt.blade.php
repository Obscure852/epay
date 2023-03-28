@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">New Sales Receipts</a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="btn btn-sm btn-secondary" href="" role="button">Page Tips</a>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </nav>

          <div class="container-fluid">  <!---MAIN CONTENT--->
            
            <div class="row mt-5"> <!---ROW 1---->
                <div class="col-sm-6"> <!---------COL 1 --------->

            <form>               
    

                <div class="row g-3 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Customer Name</label>
                    <div class="col-sm-6">
                      
                    <div class="input-group mb-3">
                    <select class="form-select form-select-sm" id="inputGroupSelect02">
                        <option selected> ---Select Customer--- </option>
                        <option value="1">App Space Group</option>
                        <option value="2">Fledge Hecks</option>
                        <option value="3">Intel Blocks</option>
                   
                        <option value="3"> <i class="fa-solid fa-plus"></i> New Customer</option>
                    </select>
                    <label class="input-group-text" for="inputGroupSelect02"><i class="fa-solid fa-magnifying-glass" title="Click to search"></i></label>
                    </div>
</div>

                    </div>

               
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Receipt Date</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sales Receipt No</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>

                  <hr>
                  <div class="mb-4 fw-bold">
                  <span class="mb-4">Payment Details</span>
                  </div>
                  
                  <div class="row g-2 mb-3">                   
                   
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Payment Mode</label>
                    <div class="col-sm-3">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Cash</option>
                        <option value="1">EFT</option>
                        <option value="2">E -Wallet</option>
                        <option value="3">Smega</option>
                        <option value="3">PayOnce</option>
                      </select>
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Reference</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" placeholder="Ref" aria-label="Zip">
                    </div>
                  </div>
             <hr>

                 

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>                   
                    <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Let your customers know what this estimate is for"></textarea>
                    </div>                    
                  </div>
                  <hr>            
         
        </div> <!---------/COL 1 --------->
<!---------------------------END OF COL 1------------------------------------->
<!----------------------------COL 2 BIGGINS HERE------------------------------>
 <!----------TABLE BILL--------------->
 <div class="col-sm-10 mt-4"> <!----TABLE CONTAINER---->
                  <table class="table table-bordered">
                <thead>
                  <tr>
            
                    <th scope="col">Item Details</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Tax</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
     
                    <td>
                    <div class="col-sm-12">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect" style="border: 0px">
                        <option selected>--Type or click to select an item--</option>
                        <option value="1">Connecta 5Mbps</option>
                        <option value="2">Connecta 25Mbps</option>
                      
                      </select>
                    </div>    
                  </td>
                  <td>
                      <div class="col-sm-12">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3" min="1" style="border: 0px">
                    </div>
                  </td>
                  <td>
                      <div class="col-sm-12">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3" style="border: 0px">
                    </div>
                  </td>

                     <td>
                    <div class="col-sm-12">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect" style="border: 0px">
                        <option selected>--Select Tax Rate--</option>
                        <option value="1">VAT 0.00%</option>
                        <option value="1">VAT 14%</option>
                        <option value="2">VAT 20%</option>
                      
                      </select>
                    </div>    
                  </td>

                  <td class="text-center fw-bold">
                   0.00
                  </td>
                  <td>
                  <a href="#"><i class="fa-regular fa-copy text-success" title="Clone"></i></a>&nbsp;&nbsp;&nbsp;
                  <a href="#"> <i class="fa-solid fa-circle-xmark text-danger" title="Remove"></i></a>
                  </td>
             
                  </tr>


                  
                  
                </tbody>
              </table>           

          </div><!----/TABLE CONTAINER----->

          <!---------------2 Column  ROW WITHIN 10 COL ROW--------------------->

          <div class="row"> <!----MINI ROW WITHIN 10 COl ROW ----->
  <div class="col-sm-4"><!---MINI COL 1----->
    <div class="card">
      <div class="card-body"><!-----CARD BODY 1----->
      
          <div class="btn-group">
              <a href="#" class="btn btn-sm btn-dark active" aria-current="page">Add another line</a>
              <a href="#" class="btn  btn-sm btn-secondary">Add more than 1</a>       
          </div>

  <div class="mb-3 mt-3"><!--CUSTOMER NOTES--->
  <label for="exampleFormControlTextarea1" class="form-label">Customer Notes</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Looking forward for your business"></textarea>
</div><!--/CUSTOMER NOTES--->



            
      </div><!-----/CARD BODY 1----->
    </div>
  </div><!---/MINI COL 1----->


  <div class="col-sm-6"><!---MINI COL 2----->
    <div class="card">
      <div class="card-body"><!-----CARD BODY 2----->
        <!--------TOTALS TABLE---------->
        

<table class="table" style="width:100%">
  <tr><!---SUB TOTAL----->
    <th>Sub Total</th>
    <td></td>
    <td>0.00</td>
  </tr><!---/SUB TOTAL----->
  <tr><!---DISCOUNT----->
    <th>Discount</th>
    <td>
    <div class="col-sm-5">
    <div class="input-group">
  <input type="text" class="form-control form-control-sm" aria-label="Text input with dropdown button">
  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">BWP</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">%</a></li>
    <li><a class="dropdown-item" href="#">BWP</a></li>
  </ul>
</div>
</div>
    </td>
    <td>
    0.00
    </td>
  </tr><!---/DISCOUNT----->
  <tr><!---SHIPPING CHARGES----->
    <th>Shipping Charges</th>
    <td>
      <div class="col-sm-5">
      <input type="text" class="form-control form-control-sm" id="inputPassword3">
      </div>
     </td>
    <td>0.00</td>
  </tr><!---/SHIPPING CHARGES----->
  <tr><!---GRAND TOTAL----->
    <th>Grand Total</th>
    <td></td>
    <td>0.00</td>
  </tr><!---/GRAND TOTAL----->
</table>
<!--------/TOTALS TABLE---------->
      
      </div><!-----/CARD BODY 2----->
    </div>
  </div><!---/MINI COL 2----->
</div> <!----/MINI ROW WITHIN 10 COl ROW ----->

<!---------------/2 Column  ROW WITHIN 10 COL ROW--------------------->







         
                            

<div class="mb-3"><!---BUTTONS CONTAINER--->
                  <button type="submit" class="btn btn-sm btn-primary mt-5">Save as Draft</button>
                  <button type="submit" class="btn btn-sm btn-primary mt-5">Save and Send</button>
                  <button type="submit" class="btn btn-sm btn-secondary mt-5">Cancel</button>
</div><!---/BUTTONS CONTAINER----->

                  <hr>
              </form>
</div>


<div style="height: 200px"><!----BOTTOM SPACER---->
          </div><!----/BOTTOM SPACER---->




        </div> <!---/ROW 1---->














       </div><!---/MAIN CONTENT--->
          @endsection