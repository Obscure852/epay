@extends('layout.app_layout')
@section('content')
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px solid #ddd;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">New Customer</a>
              
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
                    <legend class="col-form-label col-sm-2 pt-0">Customer Type</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Business
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Individual
                        </label>
                      </div>
                      
                    </div>
                  </fieldset>

                <div class="row g-3 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Primary Contact</label>
                    <div class="col-sm-3">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Salutation</option>
                        <option value="1">Mr</option>
                        <option value="2">Mrs</option>
                        <option value="3">Dr</option>
                      </select>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="form-control form-control-sm" placeholder="First Name" aria-label="State">
                    </div>
                    <div class="col-sm">
                      <input type="text" class="form-control form-control-sm" placeholder="Last Name" aria-label="Zip">
                    </div>
                  </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Company Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Display Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Customer Email</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>


                  <div class="row g-2 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Customer Phone</label>
                   
                    <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" placeholder="Work Phone" aria-label="State">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control form-control-sm" placeholder="Mobile" aria-label="Zip">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Website</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>
                
              
                    <!----------------Other Details------------------------>


                  <ul class="nav nav-pills mt-3 mb-3 p-1" id="pills-tab" role="tablist" style="border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Other Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Address</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Remarks</button>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent"><!---MAIN CONTENT WRAP---->

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><!----Other Details------>
               

                <div class="row g-3 mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Currency</label>
                    <div class="col-sm-4">
                      
                      <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Add Currency</option>
                        <option value="1">BWP - Botswana Pula</option>
                        <option value="2">CAD - Canadian Dollar</option>
                        <option value="3">ZAR - South Africa Rand</option>
                      </select>
                    </div>
                    
                  </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Tax Rate</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Payment Terms</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Twitter</label>
                   
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" placeholder="Twitter" aria-label="State">
                    </div>
                    
                  </div>

                  
                </div><!----/Other Details------>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><!-----Address------->

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Attention</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>
                
                <div class="row g-3 mb-3">            
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Country/Region</label>
                    <div class="col-sm-6">                      
                      <select class="form-select form-select-sm" id="autoSizingSelect">
                        <option selected>Add Country</option>
                        <option value="1">Botswana</option>
                        <option value="2">Canadian</option>
                        <option value="3">South Africa</option>
                      </select>
                    </div>                    
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>                   
                    <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>                    
                  </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">District</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-sm" id="inputPassword3">
                    </div>
                  </div>


                  <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Fax</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="inputPassword3">
                  </div>
                </div>


                </div><!-----/Address------->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><!--------Remarks------->
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Remarks (For Internal Use)</label>                   
                    <div class="col-sm-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>                    
                  </div>
                </div><!--------/Remarks------->

                </div><!---/MAIN CONTENT WRAP---->
                            









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