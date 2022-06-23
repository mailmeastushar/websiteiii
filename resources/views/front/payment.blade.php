@extends('front.master')
@section('meta_title', $meta['title'])
@section('meta_description', $meta['description'])
@section('container')

<div class="callback-form contact-us pay-ment">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send Us  <em>Your Details</em></h2>
              <!-- <span>Contact us today by fill up free online visa assessment and we will contact you</span> -->
              <span>TRIPLE I BUSINESS SERVICES</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
            
              
                  <form  method="get" action="{{ url('payment-razorpay') }}">
               
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input required type="text" name="name" class="form-control" id="exampleinput requiredPassword1" placeholder="Enter Name">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                 
                      <input required type="email" class="form-control" id="exampleinput requiredEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    
                    </fieldset>
                  </div>
                  <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                  
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </fieldset>
                  </div> -->
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input required type="text" name="mobile" class="form-control" id="exampleinput requiredPassword1" placeholder="Enter mobile no">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input required type="number" name="amount" class="form-control" id="exampleinput requiredPassword1" placeholder="Enter Amount">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input required type="text" name="agname" class="form-control" id="exampleinput requiredPassword1" placeholder="Agent Name (optional)">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="sub" class="btn btn-primary btn-block">Submit</button>
                       
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
<!--<center><h1>Your Details</h1></center>-->
<!--<div class="container mt-5 col-6 mx-auto">-->
<!--	<div class="row">-->
<!--		<div class="col-md-12">-->
<!--			<form  method="get" action="{{ url('payment-razorpay') }}">-->
<!--				<div class="form-group">-->
<!--				    <label for="exampleinput requiredPassword1">Name</label>-->
<!--				    <input required type="text" name="name" class="form-control" id="exampleinput requiredPassword1" placeholder="Enter Name">-->
<!--				  </div>-->
<!--				  <div class="form-group">-->
<!--				    <label for="exampleinput requiredEmail1">Email address</label>-->
<!--				    <input required type="email" class="form-control" id="exampleinput requiredEmail1" aria-describedby="emailHelp" placeholder="Enter email">-->
<!--				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
<!--				  </div>-->

<!--				  <div class="form-group">-->
<!--				    <label for="exampleinput requiredPassword1">Mobile</label>-->
<!--				    <input required type="text" name="mobile" class="form-control" id="exampleinput requiredPassword1" placeholder="Enter mobile no">-->
<!--				  </div>-->
<!--				  <div class="form-group">-->
<!--				    <label for="exampleinput requiredPassword1">Amount</label>-->
<!--				    <input required type="number" name="amount" class="form-control" id="exampleinput requiredPassword1" placeholder="Enter Amount">-->
<!--				  </div>-->

<!--				  <div class="form-group">-->
<!--				    <label for="exampleinput requiredPassword1">Agent Name(optional)</label>-->
<!--				    <input required type="text" name="agname" class="form-control" id="exampleinput requiredPassword1" placeholder="Agent Name">-->
<!--				  </div>-->

<!--				  <button type="submit" name="sub" class="btn btn-primary btn-block">Submit</button>-->
<!--			</form>-->
			<!-- <form action="" method="">
<!--			<button id="rzp-button1">Pay</button><script src="https://checkout.razorpay.com/v1/checkout.js">-->
<!--				data-key = "";-->


<!--			</script>-->
			
				
<!--			</form> -->-->
			<!-- <script>var options = {    "key": "rzp_live_oSZeib4jxk1ceC", "amount": "100","currency": "INR",    "name": "Acme Corp",    "description": "Test Transaction",    "image": "https://example.com/your_logo",    "order_id": "",    "handler": function (response){        alert(response.razorpay_payment_id);        alert(response.razorpay_order_id);        alert(response.razorpay_signature)    },    "prefill": {        "name": "Gaurav Kumar",        "email": "gaurav.kumar@example.com",        "contact": "9999999999"    },    "notes": {        "address": "Razorpay Corporate Office"    },    "theme": {        "color": "#3399cc"    }};var rzp1 = new Razorpay(options);rzp1.on('payment.failed', function (response){        alert(response.error.code);        alert(response.error.description);        alert(response.error.source);        alert(response.error.step);        alert(response.error.reason);        alert(response.error.metadata.order_id);        alert(response.error.metadata.payment_id);});document.getElementById('rzp-button1').onclick = function(e){    rzp1.open();    e.preventDefault();}</script> -->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
@stop


