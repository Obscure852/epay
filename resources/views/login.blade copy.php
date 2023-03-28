<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>ePay Invoicing</title>



    <style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

body {
    background: #E1EBEC;
    font-family: 'Poppins', sans-serif;
    background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.row {
    width: 800px;
    border: none;
    border-radius: 0;
    box-sizing: border-box
}

.lcol {
    background: #00C9FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #92FE9D, #00C9FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #92FE9D, #00C9FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    height: 400px;
    padding: 0 35px
}

.rcol {
    background: #fff;
    padding: 80px;
    height: 400px
}

span.txt {
    color: #17C296
}

.greeting {
    padding-top: 100px;
    padding-right: 90px
}

h6.mt-3 {
    padding-right: 115px
}

.footer {
    margin-top: 220px
}

.footer span {
    color: #B0A1E2;
    font-size: 9px;
    cursor: pointer
}

.fab {
    color: #EDEDF5;
    font-size: 10px;
    margin-right: 20px;
    padding-top: 3px;
    cursor: pointer
}

h2.heading {
    font-weight: bold
}

.form-control {
    border: none;
    border-radius: 0px;
    border-bottom: 1px solid #F2F2F2
}

.form-control::placeholder {
    font-size: 13px;
    color: #C2C2CC
}

.form-control:focus {
    box-shadow: none;
    border-bottom: 1px solid #F2F2F2
}

.fone input {
    padding-left: 20px
}

.fone {
    position: relative
}

.fone .fas {
    position: absolute;
    left: 0;
    top: 5px;
    padding: 8px 0px;
    color: #C2C2CC;
    font-size: 12px
}

.fone .image {
    position: absolute;
    left: 275px;
    top: 0px;
    cursor: pointer
}

.form-check-input {
    margin-top: 10px
}

.form-check-label {
    font-size: 9px;
    color: #C2C2CC
}

.btn-success {
    padding: 7px 40px;
    background: #11C892;
    border: none;
    border-radius: 30px;
    font-size: 9px
}

.btn-success:hover {
    background: #11C892
}

.btn-success:focus {
    box-shadow: none
}

u {
    cursor: pointer
}

p.exist {
    font-size: 9px;
    color: #C2C2CC
}

p.exist span {
    cursor: pointer;
    color: #ABA5D3
}

@media screen and (max-width: 993px) {
    .fone .image {
        position: absolute;
        left: 180px
    }

    .footer {
        margin-top: 170px
    }
}

@media screen and (max-width: 768px) {
    .row {
        width: 450px
    }

    .rcol {
        padding: 60px 180px 60px 60px
    }
}

@media screen and (max-width: 420px) {
    .rcol {
        padding: 60px 50px 60px 50px
    }

    .footer {
        margin-top: 140px
    }
}
 
        </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="row my-5">
            <div class="col-md-6 text-left text-white lcol">
                <div class="greeting">
                    <h3>ePay <span class="txt">Invoicing</span></h3>
                </div>
                <span class="txt">Your Finances In One Place</span>
                <h6 class="mt-3">Enjoy a fully-featured suite of customizable business reports and summaries so you always know where your business stands.</h6>
                <div class="footer">
                    <div class="socials d-flex flex-row justify-content-between text-white">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6 rcol">
                <form class="sign-up">
                    <h2 class="heading mb-4">Please login</h2>
                    
                    <div class="form-group fone mt-2"> <i class="fas fa-envelope"></i> <input type="email" class="form-control" placeholder="Work email"> </div>
                    <div class="form-group fone mt-2"> <i class="fas fa-lock"></i> <input type="password" class="form-control" placeholder="Password">
                        <div class="image"><i class="fas fa-eye"></i></div>
                    </div> <input type="checkbox" class="form-check-input ml-0" id="exampleCheck1"> <label class="form-check-label ml-3" for="exampleCheck1">Keep me looged in</u></label>
                 <a  href="{{url('sign')}}" role="button" type="button" class="btn btn-block btn-success mt-5">Login</a>
               
                 </form>
              
            </div>
        </div>
    </div>
   
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>