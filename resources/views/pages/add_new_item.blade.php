@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">New Item</a>
              
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
            
            <div class="row mt-5">
                <div class="col-sm-6"> <!---------COL 1 --------->

            <form>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Item Type</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Goods
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Services
                        </label>
                      </div>
                      
                    </div>
                  </fieldset>

                  <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Item Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>

                <div class="row g-3 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Unit Measure</label>
                    <div class="col-sm-6">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Select Unit of measure</option>
                        <option value="1">KG</option>
                        <option value="2">Ml</option>
                        <option value="3">GHz</option>
                      </select>
                    </div>                  
                    </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label text-danger">Selling Price <span>*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">                    
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>                   
                    <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>                    
                  </div>


                  <div class="row g-3 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tax</label>
                    <div class="col-sm-6">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Select tax</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                      </select>
                    </div>                  
                    </div>                 
                
              



                  <button type="submit" class="btn btn-sm btn-primary mt-5">Save</button>
                  <button type="submit" class="btn btn-sm btn-secondary mt-5">Cancel</button>

                  <hr>
              </form>

            

          <div style="height: 200px"><!----BOTTOM SPACER---->
          </div><!----/BOTTOM SPACER---->


        </div> 
        </div>
       </div><!---/MAIN CONTENT--->
          @endsection