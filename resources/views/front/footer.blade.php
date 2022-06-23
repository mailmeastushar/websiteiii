 

<!-- Footer -->
<footer class="footer-Area">
    
    <div class="container">
        <div class="subscribeArea">
        <div class="row">
            <div class="col-md-6">
                <!-- <h2><span class="material-icons"><i class="fas fa-envelope-open-text"></i></span>Sign up to get Latest Updates</h2> -->
                <h2><span class="material-icons"><i class="fas fa-envelope-open-text"></i></span>Send Me Immigration Updates</h2>
            </div>
            <div class="col-md-6">
               
            <form action="{{ url('newslatter/' )}}" method="get">
               <div class="input-group">
                  <input required type="email" name="email" class="form-control" placeholder="myemailid@gmail.com" style="background-clip: unset;width: 40%;">
                  <span>
                  <button class="btn btn-theme" type="submit" style="color: #fff;
                     font-weight: bold;">Subscribe <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></button>
                  </span>
               </div>
            </form>
     
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="logo-footer-2">
                    <a href="{{ url('/') }}"><img src="{{ asset('public/assets/user') }}/images/foot-new.png" alt="logo" class="img-responsive"></a>
                    <p>
                        Triple I Business is one of the growing companies in Delhi NCR, providing consultancy services for Permanent Residency and Study Visas in Canada, Australia, Germany, UK, and many other countries. We also offer Visa services for Tourist visas and Visitor visas.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footMenu">
                    <div class="menuTitle">
                        <h4>VISA</h4>
                    </div>
                    <ul>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/study"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Study Visa </a></li>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/permanent-residence"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Permanent Residence </a></li>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/self-emplyement-entrepreneur-visa"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Self Employment/ Entrepreneur Visa </a></li>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/travel-visa"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Travel Visa </a></li>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/visitor-visa"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Visitor Visa </a></li>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/work-visa"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Work Visa </a></li>
                    <li><a class="" href="https://www.tripleibusiness.com/visa/investor-visa"> <span class="material-icons"><i class="fas fa-angle-right"></i></span> Investor Visa </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footMenu">
                    <div class="menuTitle">
                        <h4>INFORMATION</h4>
                    </div>
                    <ul>
                        <li><a href="{{ route('about-us') }}" > <span class="material-icons"><i class="fas fa-angle-right"></i></span> About Us</a></li>
                        <li><a href="{{ route('harshit-rai') }}" > <span class="material-icons"><i class="fas fa-angle-right"></i></span> Our Offices</a></li>
                        <li><a href="{{ route('harshit-rai') }}" > <span class="material-icons"><i class="fas fa-angle-right"></i></span> Contact Us</a></li>
                        <li><a href="{{ route('front_policy_gaurav','terms-condition') }}" > <span class="material-icons"><i class="fas fa-angle-right"></i></span> Terms of Use</a></li>
                        <li><a href="{{ route('front_policy_gaurav','privacy-policy') }}" > <span class="material-icons"><i class="fas fa-angle-right"></i></span> Privacy Policy</a></li>
                        <li><a href="{{ route('front_policy_gaurav','fraud-prevention') }}" > <span class="material-icons"><i class="fas fa-angle-right"></i></span> Fraud Prevention</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="footMenu">
                    <div class="menuTitle">
                        <h4>GET IN TOUCH</h4>
                    </div>
                    <ul class="get-in">
                    <li>
                        <div class="icon-f">
                            <span class="material-icons"><i class="fas fa-envelope"> </i></span>
                        </div>
                        <div class="foot-get-txt">
                            <h4>Mail Us</h4>
                            <p><a href="mailto:info@tripleibusiness.com">info@tripleibusiness.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-f">
                            <span class="material-icons"><i class="fas fa-phone-alt"> </i></span>
                        </div>
                        <div class="foot-get-txt">
                            <h4>Call Us</h4>
                            <p><a href="tel: +011 46520736"> +011 46520736</a></p>
                        </div>
                    </li>
                    <li>
                        
                        <div class="foot-get-txt">
                            <!--<h4>WhatsApp Us</h4>-->
                            <!--<p><a href="https://api.whatsapp.com/send?phone=918595744633" target="_blank"> +91 8595744633</a></p>-->

                            <ul class="f-social-m">
                            <li><a href="https://www.facebook.com/TripleIBusiness" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a></li>
                            <li><a href="https://twitter.com/Tripleibusines" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i> </a></li>
                            <li><a href="https://www.instagram.com/triplei_business" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i> </a></li>
                            <li><a href="https://www.linkedin.com/company/tripleibusiness" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i> </a></li>
                            <li><a href="https://www.youtube.com/channel/UCE470WjyWb-sqK78RO44ryw" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i> </a></li>
                            
                            
         <!--                   <li><a href="#" class="instaGram"><i class="fab fa-instagram"></i></a></li>-->
									<!--<li><a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a></li>-->
									<!--<li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>-->
									<!--<li><a href="#" class="tele"><i class="fab fa-telegram-plane"></i></a></li>-->
									<!--<li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>-->
									<!--<li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>-->
									<!--<li><a href="#" class="linkdin"><i class="fab fa-linkedin-in"></i></a></li>-->
        
                            
                            </ul>
                                                    </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyrightArea-new">
            <div class="row">
                <div class="col-md-12">
                    <p class="">© 2021 Copyright:<a href="#" style="color: #fff">Triple I Business Services  Pvt. Ltd.  </a></p>
                </div>
               <!--  <div class="col-md-6">
                    <ul class="copyMenu">
                        <li><a href="{{ route('about-us') }}" > <span class="material-icons">navigate_next</span> About Us</a></li>
                        <li><a href="{{ route('harshit-rai') }}" > <span class="material-icons">navigate_next</span> Our Offices</a></li>
                        <li><a href="{{ route('harshit-rai') }}" > <span class="material-icons">navigate_next</span> Contact Us</a></li>
                        <li><a href="{{ route('front_policy_gaurav','terms-condition') }}" > <span class="material-icons">navigate_next</span> Terms of Use</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    
<div class="floating_btn">
    <a target="_blank" href="https://wa.me/">
      <div class="contact_icon">
          <a href="https://api.whatsapp.com/send?phone=918595744633" target="blank"><i class="fab fa-whatsapp my-float"></i></a> 
            
        
      </div>
    </a>
 
  </div>
</footer>









<!-- Footer 
<footer class="page-footer font-small mdb-color pt-4 footer_custom" id="sticky-footer" 
style="background:#04131f;">
<div class="container text-center text-md-left">
<div class="row text-center text-md-left mt-3 pb-3">
<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold" style="color: #fff">Address</h6>
<p >A-79 3rd floor DDA Shed Okhla Indusrial Area Phase-2 Near Crown Plaza Hotel,Delhi, INDIA</p>
<!--Google map
<div style="width: 100%; margin-top: 20px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28042.00589656729!2d77.2705318449691!3d28.532182280907698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce79913f934e1%3A0x598e881f20623b1e!2sTriple%20I%20Business%20Services%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1598076568746!5m2!1sen!2sin" width="100%" height="110" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>


<hr class="w-100 clearfix d-md-none">
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold" style="color: #fff">Know Us</h6>
<p><a href="{{ route('about-us') }}" style="color: #fff"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</a></p>
<p><a href="{{ route('harshit-rai') }}" style="color: #fff"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Our Offices</a></p>
<p><a href="{{ route('harshit-rai') }}" style="color: #fff"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us</a></p>
</div>

<hr class="w-100 clearfix d-md-none">
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold" style="color: #fff">Policies</h6>
<p><a href="{{ route('front_policy_gaurav','terms-condition') }}" style="color: #fff"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Terms of Use</a></p>
<p><a href="{{ route('front_policy_gaurav','privacy-policy') }}" style="color: #fff"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy</a></p>
<p><a href="{{ route('front_policy_gaurav','fraud-prevention') }}" style="color: #fff"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fraud Prevention</a></p>
</div>
<hr class="w-100 clearfix d-md-none">


<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
<h6 class="text-uppercase mb-4 font-weight-bold" style="color: #fff">Contact</h6>
<p><i class="fa fa-envelope" aria-hidden="true"></i>info@tripleibusiness.com</p>
<p style="font-size: 0.8rem;"><i class="fa fa-phone" aria-hidden="true" 
style="color: #3f2ca9;font-weight: bold"></i> +011 46520736</p>
<p><a  href="https://web.whatsapp.com/" style="color: #fff;font-size: 0.8rem;">
<i class="fa fa-whatsapp" aria-hidden="true"style="color: #12BB1A;font-weight: bold"></i> +91 8595744633 </a>
</p>
</div>


</div>
<hr style="background: grey">
<div class="row d-flex align-items-center">
<div class="col-md-7 col-lg-8">
<p class="text-center text-md-left">© 2021 Copyright:
<a href="#" style="color: #fff">
<strong>Triple I Business Services  Pvt. Ltd. </strong>
</a>
</p>

</div>

<div class="col-md-5 col-lg-4 ml-lg-0">

<!-- Social buttons 
<div class="text-center text-md-right Social_buttons">
<ul class="list-unstyled list-inline">
<li class="list-inline-item">
<a href="https://www.facebook.com/TripleIBusiness" class="btn-floating btn-sm  mx-1" style="background: #3A559F;border-radius: 50%;" target="_blank">
<i class="fa fa-facebook" aria-hidden="true"  style="color: #fff;"></i>
</a></li>

<li class="list-inline-item">
<a href="https://www.instagram.com/triplei_business" class="btn-floating btn-sm  mx-1" style="background: #4268B3;border-radius: 50%;" target="_blank">
<i class="fa fa-instagram" aria-hidden="true" style="color: #fff;"></i>
</a></li>

<li class="list-inline-item">
<a href="https://twitter.com/Tripleibusines" class="btn-floating btn-sm  mx-1" style="background: #4268B3;border-radius: 50%;" target="_blank">
<i class="fa fa-twitter" aria-hidden="true" style="color: #fff;"></i>
</a></li>

<li class="list-inline-item">
<a href="https://www.linkedin.com/company/tripleibusiness" class="btn-floating btn-sm  mx-1" style="background: #007AB9;border-radius: 50%;" target="_blank">
<i class="fa fa-linkedin" aria-hidden="true" style="color: #fff;"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</footer>
<!-- Footer -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('public/toastr/toastr.js') }}"></script>
<script src="{{ asset('public/assets/user/js/slider.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easy-ticker/2.0.0/jquery.easy-ticker.min.js"></script>

<script type="text/javascript">
// hide popup on esc press
$(document).keydown(function(event) { 
    if (event.keyCode == 27) { 
        $('#boxes').hide();
    }
});

$(document).ready(function(){

    $('.blogSlider').easyTicker({
        direction: 'up',
        easing: 'swing',
        speed: 'fast',
        interval: 2500,
        height: 'auto',
        visible: 0,
        mousePause: true,
        autoplay: true,
        controls: {
            up: '',
            down: '',
            toggle: '',
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false,
            finish: false
        }
    });

});

$(document).on('click', '.dropdown-menu', function (e) {
e.stopPropagation();
});

if ($(window).width() < 992) {
$('.dropdown-menu a').click(function(e){
// e.preventDefault();
if($(this).next('.submenu').length){
$(this).next('.submenu').toggle();
}
$('.dropdown').on('hide.bs.dropdown', function () {
$(this).find('.submenu').hide();
})
});
}

@if(Session::has("success"))
    toastr.success("{{ Session::get('success')}}");
@endif

@if(Session::has("danger"))
    toastr.error("{{ Session::get('danger')}}");
@endif

</script>
</body>
</html>

<script>
     $(document).ready(function() {
    $('.banner1-slider').owlCarousel({
    loop:true,
    margin:0,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    transitionStyle : "fade",
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
 $('#testimonial-slide-new').owlCarousel({
    loop:true,
    margin:0,
    dots:true,
    nav:false,
    mouseDrag:true,
    autoplay:true,
     
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

 $('#service-slide-new').owlCarousel({
    loop:true,
    margin:15,
    dots:true,
    nav:false,
    mouseDrag:true,
    autoplay:true,
     
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    }
});

       });
</script>

  <script>
            $(document).ready(function(){
  $('#mob-menu').mmenu();
});

$(window).scroll(function(){
    if ($(window).scrollTop() >= 180) {
        $('#desk-nav').addClass('fixed-header');
      
    }
    else {
        $('#desk-nav').removeClass('fixed-header');
        
    }
});

 
        </script>
        
        <script type="text/javascript">
jQuery(document).ready(function(){
    var urlPath = window.location.pathname;
    document.body.className = urlPath.match(/\/(.*?)(\+|$)/)[1].toLowerCase();

});
</script>

<script>
function showReply(rowid){
    if($('#reply-div'+rowid).hasClass('d-none')){
        $('#reply-div'+rowid).removeClass('d-none');
    }else{
        $('#reply-div'+rowid).addClass('d-none');
    }
}

jQuery(document).ready(function(){

switch (window.location.pathname) {
    case '/':
        $('body').addClass('body-page-home');
        break;
 
    default: 
        // code block
}
 });
// check url in string
function isUrlExist(string) {
  var regex = /(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,63}(:[0-9]{1,5})?(\/.*)?/g;
  return regex.test(string) ? string.match(regex) : false;
}
// check is email valid or not
function IsValidEmail(email) {
    var RegExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (RegExp.test(email)) {
        return true;
    }else{
        return false;
    }
}
$(document).on('keypress','.number',function(e){
    // Allow: backspace, delete, tab, escape, enter, ctrl+A and 
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) || 
         // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return false;
    }
    var charValue = String.fromCharCode(e.keyCode)
        , valid = /^[0-9]+$/.test(charValue);

    if (!valid) {
        e.preventDefault();
    }
});
</script>
<script>
    // contact us form
    $(document).on('keydown','#message',function(){
        var val = $(this).val();
        var textlen = val.length;
        if(textlen > 250){
            $('#message_error_msg').text('Message size exceeds!');
        }else{
            if(isUrlExist(val)){
                $('#message_error_msg').text('Urls are not allowed!');
            }else{
                $('#message_error_msg').text('');
            }
        }
    });
    $(document).on('click','#contact_frm_submit',function(){
        $('#contact_frm_submit').attr('disabled',true);
        var is_all_valid = false;
        if($('#name').val().length==0){
            is_all_valid = false;
            $('#name_error_msg').text('Name required!');
        }else{
            is_all_valid = true;
            $('#name_error_msg').text('');
        }
        if($('#mobile').val().length==0){
            is_all_valid = false;
            $('#mobile_error_msg').text('Mobile required!');
        }else{
            is_all_valid = true;
            $('#mobile_error_msg').text('');
        }
        if($('#email').val().length==0 || !IsValidEmail($('#email').val())){
            is_all_valid = false;
            $('#email_error_msg').text('Invalid Email!');
        }else{
            is_all_valid = true;
            $('#email_error_msg').text('');
        }
        if($('#message').val().length==0){
            is_all_valid = false;
            $('#message_error_msg').text('Message required!');
        }else{
            if($('#message').val().length > 250){
                is_all_valid = false;
                $('#message_error_msg').text('Message size exceeds!');
            }else{
                if(isUrlExist($('#message').val())){
                    is_all_valid = false;
                    $('#message_error_msg').text('Urls are not allowed!');
                }else{
                    is_all_valid = true;
                    $('#message_error_msg').text('');
                }
            }
        }

        if(is_all_valid){
            $("form[name='contact_form']").submit();
        }else{
            $('#contact_frm_submit').removeAttr('disabled');
            return false;
        }
    });
    // popup form
    $(document).on('keydown','#form_message',function(){
        var val = $(this).val();
        var textlen = val.length;
        if(textlen > 250){
            $('#form_message_error_msg').text('Message size exceeds!');
        }else{
            if(isUrlExist(val)){
                $('#form_message_error_msg').text('Urls are not allowed!');
            }else{
                $('#form_message_error_msg').text('');
            }
        }
    });
    $(document).on('click','#popup_enqfrm_btn',function(){
        $('#popup_enqfrm_btn').attr('disabled',true);
        var is_all_valid = false;
        if($('#form_name').val().length==0){
            is_all_valid = false;
            $('#form_name_error_msg').text('Name required!');
        }else{
            is_all_valid = true;
            $('#form_name_error_msg').text('');
        }
        if($('#form_phone').val().length==0){
            is_all_valid = false;
            $('#form_phone_error_msg').text('Mobile required!');
        }else{
            is_all_valid = true;
            $('#form_phone_error_msg').text('');
        }
        if($('#form_email').val().length==0 || !IsValidEmail($('#form_email').val())){
            is_all_valid = false;
            $('#form_email_error_msg').text('Invalid Email!');
        }else{
            is_all_valid = true;
            $('#form_email_error_msg').text('');
        }
        if($('#form_message').val().length==0){
            is_all_valid = false;
            $('#form_message_error_msg').text('Message required!');
        }else{
            if($('#form_message').val().length > 250){
                is_all_valid = false;
                $('#form_message_error_msg').text('Message size exceeds!');
            }else{
                if(isUrlExist($('#form_message').val())){
                    is_all_valid = false;
                    $('#form_message_error_msg').text('Urls are not allowed!');
                }else{
                    is_all_valid = true;
                    $('#form_message_error_msg').text('');
                }
            }
        }

        if(is_all_valid){
            $("#popup_enqfrm").submit();
        }else{
            $('#popup_enqfrm_btn').removeAttr('disabled');
            return false;
        }
    });
    // assessment form
    $(document).on('click','#assessment_form_btn',function(){
        $('#assessment_form_btn').attr('disabled',true);
        var is_all_valid = false;
        if($('#name_title').val().length==0){
            is_all_valid = false;
            $('#name_title_error_msg').text('Title required!');
        }else{
            is_all_valid = true;
            $('#name_title_error_msg').text('');
        }
        if($('#as_name').val().length==0){
            is_all_valid = false;
            $('#as_name_error_msg').text('Name required!');
        }else{
            is_all_valid = true;
            $('#as_name_error_msg').text('');
        }
        if($('#as_mobile').val().length==0){
            is_all_valid = false;
            $('#as_mobile_error_msg').text('Mobile required!');
        }else{
            is_all_valid = true;
            $('#as_mobile_error_msg').text('');
        }
        if($('#as_email').val().length==0 || !IsValidEmail($('#as_email').val())){
            is_all_valid = false;
            $('#as_email_error_msg').text('Invalid Email!');
        }else{
            is_all_valid = true;
            $('#as_email_error_msg').text('');
        }
        if($('#dob').val().length==0){
            is_all_valid = false;
            $('#dob_error_msg').text('Date of birth required!');
        }else{
            is_all_valid = true;
            $('#dob_error_msg').text('');
        }
        if($('#country').val().length==0){
            is_all_valid = false;
            $('#country_error_msg').text('Country required!');
        }else{
            is_all_valid = true;
            $('#country_error_msg').text('');
        }
        if($('#state').val().length==0){
            is_all_valid = false;
            $('#state_error_msg').text('State required!');
        }else{
            is_all_valid = true;
            $('#state_error_msg').text('');
        }
        if($('#qualification').val().length==0){
            is_all_valid = false;
            $('#qualification_error_msg').text('Qualification required!');
        }else{
            is_all_valid = true;
            $('#qualification_error_msg').text('');
        }
        if($('#profession').val().length==0){
            is_all_valid = false;
            $('#profession_error_msg').text('Profession required!');
        }else{
            is_all_valid = true;
            $('#profession_error_msg').text('');
        }
        if($('#exp').val().length==0){
            is_all_valid = false;
            $('#exp_error_msg').text('Year Of Experience required!');
        }else{
            is_all_valid = true;
            $('#exp_error_msg').text('');
        }
        if($('#resume_docs')[0].files.length==0){
            is_all_valid = false;
            $('#resume_docs_error_msg').text('Resume required!');
        }else{
            is_all_valid = true;
            $('#resume_docs_error_msg').text('');
        }

        if(is_all_valid){
            $("#assessment_form").submit();
        }else{
            $('#assessment_form_btn').removeAttr('disabled');
            return false;
        }
    });
    // popup form
    $(document).on('keydown','#blog_comment',function(){
        var val = $(this).val();
        var textlen = val.length;
        if(textlen > 250){
            $('#blog_comment_error_msg').text('Message size exceeds!');
        }else{
            if(isUrlExist(val)){
                $('#blog_comment_error_msg').text('Urls are not allowed!');
            }else{
                $('#blog_comment_error_msg').text('');
            }
        }
    });
    $(document).on('click','#blog_comment_form',function(){
        $('#blog_comment_form').attr('disabled',true);
        var is_all_valid = false;
        if($('#blog_name').val().length==0){
            is_all_valid = false;
            $('#blog_name_error_msg').text('Name required!');
        }else{
            is_all_valid = true;
            $('#blog_name_error_msg').text('');
        }
        if($('#blog_mobile').val().length==0){
            is_all_valid = false;
            $('#blog_mobile_error_msg').text('Mobile required!');
        }else{
            is_all_valid = true;
            $('#blog_mobile_error_msg').text('');
        }
        if($('#blog_email').val().length==0 || !IsValidEmail($('#blog_email').val())){
            is_all_valid = false;
            $('#blog_email_error_msg').text('Invalid Email!');
        }else{
            is_all_valid = true;
            $('#blog_email_error_msg').text('');
        }
        if($('#blog_comment').val().length==0){
            is_all_valid = false;
            $('#blog_comment_error_msg').text('Message required!');
        }else{
            if($('#blog_comment').val().length > 250){
                is_all_valid = false;
                $('#blog_comment_error_msg').text('Message size exceeds!');
            }else{
                if(isUrlExist($('#blog_comment').val())){
                    is_all_valid = false;
                    $('#blog_comment_error_msg').text('Urls are not allowed!');
                }else{
                    is_all_valid = true;
                    $('#blog_comment_error_msg').text('');
                }
            }
        }

        if(is_all_valid){
            $("#blog_comment_form").submit();
        }else{
            $('#blog_comment_submit_btn').removeAttr('disabled');
            return false;
        }
    });
    $(document).ready(function(){
        setTimeout( function() {
            $('#boxes').removeClass('d-none');
        }, 10000);
        

        $('[data-toggle="tooltip"]').tooltip('show');
    });
</script>  
