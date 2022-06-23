@extends('front/master')

@section("meta_title","Contact US | Triple I Business")
@section("meta_keywords","Triple I Busines Contact information, Triple I Business phone number, Triple I Business address,
Best immigration company in India")
@section("meta_description","Need help with your visa and immigration filing? contact our consultants to get started. Reach us at 011-465-207-36 or WhatsApp us at 859-574-4633")
@section('container')
<div class="contact_us">
<!--<img src="{{ asset('public/assets/user/') }}/images/contact-us-banner-1.jpg" style="width: 100%;" class="img-responsive" alt="Triple I Business Image">-->
<!--<img src="https://kushalscreeningservices.com/images/page-heading-bg.jpg" style="width: 100%;" class="img-responsive" alt="Triple I Business Image">-->
<section class="banner_main bannersubpage">
         <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
            <span>FEEL FREE TO SEND US A MESSAGE NOW!</span>
          </div>
        </div>
      </div>
    </div>
      </section>
      
      <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p>If you have any query related to our services you can call me.</p>
              <a href="tel:+91-8595744633;" style="color:#000;"> +91-8595744633 || +91-8595744633</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Contact us over the mail, you can also share your case related documents on mail</p>
              <a href="mailto:info@tripleibusiness.com;" style="color:#000;">info@tripleibusiness.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <p>A-79 3rd floor <br> DDA Shed Okhla Indusrial Area Phase-2<br>
Near Crown Plaza Hotel,Delhi, INDIA  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a <em>message</em></h2>
              <span>Contact us today by fill up free online visa assessment and we will contact you</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
            
              <form id="my_contact_form" action="{{ url('addcontact/') }}" name="contact_form" method="post">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <!--<input name="cname" type="text" class="form-control" id="name" placeholder="Full Name" required="">-->
                      <input class="form-control" name="name" id="name" placeholder="First Name..." />
                      <span id="name_error_msg" class="error"></span>
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <!--<input name="cname" type="text" class="form-control" id="name" placeholder="Full Name" required="">-->
                      <input class="form-control" name="lname" placeholder="Last Name..." />
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <!--<input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">-->
                      <input class="form-control number" maxlength="20" minlength="10" name="mobile" id="mobile" placeholder="Phone..." />
                      <span id="mobile_error_msg" class="error"></span>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <!--<input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">-->
                      <input class="form-control" name="email" id="email" placeholder="E-mail..." />
                      <span id="email_error_msg" class="error"></span>
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="cont"   class="form-control" id="subject" placeholder="Subject..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <!--<textarea name="msg" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>-->
                      <textarea class="form-control" rows="6" name="message" id="message" onpaste="return false;" autocomplete="off" placeholder="How can we help you?" style="height:150px;"></textarea>
                      <span id="message_error_msg" class="error"></span>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="button" id="contact_frm_submit" name="contact_frm_submit" class="filled-button">Send Message</button>
                       
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    
<div class="container cont_form_custom" style="display:none">

<div class="row">
<div class="col-md-12">
<form action="{{ url('addcontact/') }}" method="post">
{{ csrf_field() }}
<input class="form-control" name="name" placeholder="First Name..." /><br />
<input class="form-control" name="lname" placeholder="Last Name..." /><br />
<input class="form-control" name="mobile" placeholder="Phone..." /><br />
<input class="form-control" name="email" placeholder="E-mail..." /><br />
<textarea class="form-control" name="message" onpaste="return false;" autocomplete="off" placeholder="How can we help you?" style="height:150px;"></textarea><br/>
<input class="btn btn-primary" type="submit" value="Send" /><br /><br />
</form>
</div>
<div class="col-md-4">
<b><i class="fa fa-map-marker" aria-hidden="true"></i> Address:</b> <br />
A-79 3rd floor DDA Shed Okhla Indusrial Area Phase-2 <br />
Near Crown Plaza Hotel,Delhi, INDIA<br />
<br /><br />
<b><i class="fa fa-phone" aria-hidden="true"></i> Phone:</b><br />
+91-8595744633<br />
+91-8595744633<br/><br />



<b><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail Us:</b><br/>

<a href="https://">info@tripleibusiness.com</a><br />


<!--</div>-->
</div>
</div>
</div>



<!--Google map-->
<div class="feature map" style="width: 100%; margin-top: 0px;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28042.00589656729!2d77.2705318449691!3d28.532182280907698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce79913f934e1%3A0x598e881f20623b1e!2sTriple%20I%20Business%20Services%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1598076568746!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>




@stop