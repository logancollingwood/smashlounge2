@extends('application')
@section('content')
<div class="content">
   <header>
      <h1> Donate </h1>
      <p> We appreciate every bit of support from the community. We will always run this site free of charge, and open to all improvements. </p>
   </header>
   <content>
      <div class="row">
         <div class='col-md-6'>
            <div class="panel panel-default donate">
               <div class='panel-heading'>
                  <h2> Donate with Bitcoin <i class="fa fa-btc fa-1x"></i></h2>
               </div>
               <div class='panel-body'>
                  <form class='form-horizontal' action="https://bitpay.com/checkout" method="post" onsubmit="return bp.validateMobileCheckoutForm($('#donate'));" role='form'>
                     <input name="action" type="hidden" value="checkout">
                     <div class="form-group">
                        <label for="inputEmail" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                           <input name="orderID" id='inputEmail' type="email" placeholder="Email address (optional)" style="width: 100%;">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="amount" class="col-sm-4 control-label">Amount</label>
                        <div class="col-sm-6">
                           <input name="price" id='amount' type="number" placeholder="Amount" value="10.00" style="width: 100%;" />
                        </div>
                        <div class='col-sm-2'>
                           <select name="currency" value="">
                              <option value="USD" selected="selected">USD</option>
                              <option value="BTC">BTC</option>
                              <option value="EUR">EUR</option>
                              <option value="GBP">GBP</option>
                              <option value="CAD">CAD</option>
                           </select>
                        </div>
                     </div>
                     <input name="data" type="hidden" value="YqU4dKBUutMXSf+Yn4XObuT41yjFjnKPIzW4Ov/r+hLl/juYd0b8QbkS9TjA6v8+dM6x7kHpKzOhuZUaG9MPKQ0Kp1x75fBsixwKGxW9lzTnGIFXojLdrvWK5DHbN0FRxdGpYt7Sy199pNDspsY+5anJnJ/ExhBw09YEXsDGkb5TVkWPAh05yspIWf3Yz1dQKwloJEwEqaOJXhxvzkTa+IvyymbU3iuLj85jubj+t/lP9pVx79U6sTrI88rjZVeub3hOnOGPrkVSXZ5IDyQSRA==">
                     <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <input name="submit" type="image" src="https://bitpay.com/img/donate-md.png" border="0" style='text-align:left;'>
                        </div>
                     </div>
                  </form>
                  <br />
               </div>
            </div>
         </div>
         <div class='col-md-1 donate'>
            <h3> OR </h3>
         </div>
         <div class='col-md-5 donate'>
            <div class='panel panel-default donate'>
               <div class='panel-heading'>
                  <h3> Donate with Paypal <i class="fa fa-money fa-1x"></i></h3>
               </div>
               <div class='panel-body'>
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="TLY8N6UTRSKG4">
                     <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                     <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
                  <br />
               </div>
            </div>
         </div>
      </div>


      <div class='row' style="text-align:center">
       <h1>Thank you <span class="glyphicon glyphicon-heart gray hvr-grow"></span></h1>
        <br>

        <div class="col-md-6 col-md-offset-3" style="text-align:center;">
          <p class="lead">Every donation helps us develop more features for the community.</p>

          <ul class="whyDonate">
            <li> <span class="badge pull-left">1</span> 
              <p>Donations keep us from having to run ads in order to recoup hosting costs every month</p>
            </li>

            <li> <span class="badge pull-left">2</span> 
              <p>They allow us to spend more personal time building new features</p>
            </li>

            <li> <span class="badge pull-left">3</span> 
              <p>They will allow us to expand our business, and grow as a part of the Smash community</p>
            </li>
          </ul>
          <a class='button button-inline button-small button-success SL bttn' href="mailto:smashlounge@gmail.com"><span> <i class="fa fa-share"></i>Email Us</span></a>
          <a class='button button-inline button-small button-success SL bttn' href="http://www.twitter.com/thesmashlounge"><span> <i class="fa fa-twitter"></i>Tweet us</span></a>
          <a class='button button-inline button-small button-success SL bttn' href="http://www.facebook.com/smashlounge"><span> <i class="fa fa-twitter"></i>Facebook us</span></a>
        </div>
    </div>
   </content>
</div>
@endsection


@section('includes')
  <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
@endsection