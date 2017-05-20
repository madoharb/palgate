<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> PalGate - @yield('htmlheader_title', 'PalGate') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css">
<script src="https://www.paypalobjects.com/api/checkout.js"></script>


    <style type="text/css">
        

            html,
    body {
        margin: 0;
        padding: 0;
    }
    
    * {
        box-sizing: border-box;
    }
    
    .slider {
        width: 70%;
        margin: 60px auto;
    }
    
    .slick-slide {
        margin: 0px 20px;
    }
    
    .slick-slide img {
        width: 100%;
    }
    
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
    .hidden {
     display:none;
}

.active {
     display:block;
}
form {
    text-align: center;
    padding-top: 42px;
}


    </style>
</head>

<body>


    <div class="container-fluid spark-screen">
      <div class="col-lg-12 col-xs-12">


            <div class="panel panel-default">  
     <nav class="navbar navbar-inverse">
     <img src="image/logo1.png" class="navbar-brand" style="
    width: 60px;
    height: 50px;
    max-height: 120px;
    padding: 5px;
">
     <a href="#" class="navbar-brand">PalGate Payment Gateway</a>
</nav>

    <div class="row">

      <div class="col-lg-12 col-xs-12">

    <section class="regular slider">
        <div id="PayPal">
            <img src="./image/PayPal.svg.png">
        </div>
         <div id="palpays">
            <img src="image/logo_arabic.png">
        </div>
   


        <div id="CASHU">
            <img src="./image/CASHU.png">
        </div>
        <div id="Onecard">
            <img src="./image/Onecard.png">
        </div>
        <div id="Payoneer_logo_logotype">
            <img src="./image/Payoneer_logo_logotype.png">
        </div>
          <div id="stripe">
            <img src="./image/stripe.png">
        </div>
        <div id="MasterCard">
            <img src="./image/MasterCard_Logo.svg.png">
        </div>
            <div id="bankpp">
            <img src="image/bankpp.png">
        </div>
        


    </section>

  </div>
  </div>
    </div>
 
<div class="row">

  <div class="col-sm-4"></div>
  <div class="col-sm-4">
   <table class="table">
                 <thead>
                <tr><th rowspan="1" colspan="1" >Preview</th><th rowspan="1" colspan="1">Product</th><th rowspan="1" colspan="1">Amount</th><th rowspan="1" colspan="1">Price</th>
               </thead>

     <tbody>
   
   <tr role="row" class="odd">
               <tr role="row" class="odd">
                  <td class="sorting_1" style="vertical-align: middle;"><img style="max-width: 50px;" src="http://pngimg.com/uploads/perfume/perfume_PNG10293.png" alt=""></td>
                  <td style="vertical-align: middle;font-size: 13px;font-weight: 500;">Prefumu</td>
                  <td style="vertical-align: middle;font-size: 13px;font-weight: 500;">1</td>
                  <td style="vertical-align: middle;font-size: 13px;font-weight: 500;">20$</td>
                </tr>
                </tbody>

</table>



  <!--  -->
<form id="bankpps" class="hidden">
  <iframe src="{{ url('palbank') }}" style="width: 800px;height: 700px;"></iframe>
</form>


<form id="PayPalform" class="hidden">
  <div class="form-group">
    <div class="col-lg-12 col-xs-12">
        <div id="paypal-button"></div>
  </div>
 </div>
</form>












<!--  -->
<form id="palbank" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<form id="stripeform" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<!--  -->
<form id="CASHUform" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<!--  -->

<!--  -->
<form id="MasterCardform" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<!--  -->
<form id="Payoneer_logo_logotypeform" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<!--  -->
<form id="Onecardform" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<form id="palpay" class="hidden">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>







    <script>
        paypal.Button.render({

            env: 'sandbox', // Or 'sandbox',
   client: {
            sandbox:    'AW3O08-s_yfGWKZrt4hGH1jHur50ZsGkaGWi_w1x9UnGz1hrZcQsgGEjHL1Vaz6sjfFcqX6yaY5R6SfN',
            production: 'xxxxxxxxx'
        },
            commit: true, // Show a 'Pay Now' button

          payment: function(data, actions) {
            return actions.payment.create({
                transactions: [
                    {
                        amount: { total: '20.00', currency: 'USD' }
                    }
                ]
            });
        },


          onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {

                    window.alert('Payment Complete!');
            });
        }

        }, '#paypal-button');
    </script>

</div>

</div>



    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="./slick/index.js" type="text/javascript" charset="utf-8"></script>
 
</body>

</html>
