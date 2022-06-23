@extends('front.master')
@section("meta_title","Settle in Canada, Australia, NZ, Germany | Triple I Business")
@section("meta_keywords","Home")
@section("meta_description","Want to live abroad? Triple I Business is a leading Visa and immigration company in India. Apply for PR Visas, Study Visas, Work Visas in Canada, & Australia.")
@section('container')
<!-- ------slider start------- -->
<div class="banner-bannerSlider">
   <div class="banner1-slider owl-carousel owl-theme">
      @foreach($slider as $slider)
      <div class="item">
         <img src="{{ asset('public/assets/images/'.$slider['image']) }}" alt="{{ $slider['alt'] }}" class="img-responsive">
         <div class="cover">
            <div class="container">
               <div class="header-content">
                  <div class="line animated bounceInLeft"></div>
                  <h2>Triple "I" Business Services Pvt. Ltd.</h2>
                  <h1>{{ $slider['name']}}</h1>
                  <h4>Established in 2014 with a vision to bring transparency to Visa seekers in India</h4>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
<div class="box-home3">
   <div class="container go-top">
      <div class="row">
         <div class="col-md-4">
            <div class="card-box">
               <div class="number1">01</div>
               <div class="title-box">
                  <span class="material-icons"><i class="fas fa-book"></i> </span>
                  <h4>Apply Online Visa</h4>
               </div>
               <div class="box-desc">
                  <p>
                     Apply for easily Accessible & Trackable visas Online
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card-box">
               <div class="number1">02</div>
               <div class="title-box">
                  <span class="material-icons"><i class="far fa-list-alt"></i> </span>
                  <h4>  Book an Appointment</h4>
               </div>
               <div class="box-desc">
                  <p>
                     Schedule an appointment & get quick solutions to your queries 
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card-box">
               <div class="number1">03</div>
               <div class="title-box">
                  <span class="material-icons"><i class="fas fa-suitcase"></i></span>
                  <h4>Immigration Experts</h4>
               </div>
               <div class="box-desc">
                  <p>
                     Ensure the authenticity of your Immigration process with Industry 
                     Experts
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="abt-info">
         <div class="row">
            <div class="col-md-6">
               <div class="themestek-wrap-cell">
                  <!--<h4 class="themestek-custom-heading ">Who we are</h4>-->
                  <h2 class="themestek-custom-heading ">We are professional Expert<br>
                     <em>in Immigration Visa</em>
                  </h2>
               </div>
            </div>
            <div class="col-md-6">
               <div class="wpb_wrapper">
                  <h4 class="themestek-custom-heading " style="
                     padding: 0 0 10px 0;
                     ">Who we are</h4>
                  <p>Triple I Business is a team of responsive, cooperative, and experienced Professionals. Established in the year 2014, Triple I is the trusted consultant for its commitment, friendly support, and right guidance. We always work towards one aim- the best Immigration service for every visa seeker.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ------slider end//------- -->
<!-- ---fixed social media start----->
<!--<div class="fixed_social_media">-->
<!--   <nav>-->
<!--      <ul>-->
<!--         <li><a href="https://www.facebook.com/TripleIBusiness" target="_blank"><i class="fa wp-icon fa-facebook-f fa-lg" aria-hidden="true"></i><span>Facebook</span></a></li>-->
<!--         <li><a href="https://twitter.com/Tripleibusines" target="_blank"><i class="fa wp-icon fa-twitter fa-lg" aria-hidden="true"></i><span>Twitter</span></a></li>-->
<!--         <li><a href="https://www.instagram.com/triplei_business" target="_blank"><i class="fa wp-icon fa-instagram fa-lg" aria-hidden="true"></i><span>Instagram</span></a></li>-->
<!--         <li><a href="https://www.linkedin.com/company/tripleibusiness" target="_blank"><i class="fa wp-icon fa-linkedin fa-lg" aria-hidden="true"></i><span>Linkedin</span></a></li>-->
<!--         <li><a href="#"><i class="fa wp-icon fa-youtube fa-lg" aria-hidden="true"></i><span>Youtube</span></a></li>-->
<!--      </ul>-->
<!--   </nav>-->
<!--</div>-->
<!-- ---fixed social media end//----->
<div class="contry-flag">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="flag-box">
               <div class="img-box">
                  <img class="card-img-top" src="{{ asset('public/assets/user') }}/images/ca.png" alt="Card image cap" class="img-responsive">   
               </div>
               <div class="text-box-flag">
                  <h4 class="card-title red_line">CANADA</h4>
                  <ul>
                     <li>Immigrant Friendly</li>
                     <li>Prominent choice of Indians</li>
                     <li>Free Education for Children</li>
                     <li>Social Benefits</li>
                     <li>Free Medical Care</li>
                  </ul>
               </div>
               <div class="btn-link">
                  <a href="{{ url('visa/canada/benefits') }}">Get Details <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>	
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="flag-box">
               <div class="img-box">
                  <img class="card-img-top" src="{{ asset('public/assets/user') }}/images/flag-aust.png" alt="Card image cap" class="img-responsive">   
               </div>
               <div class="text-box-flag">
                  <h4 class="card-title blue_line">AUSTRALIA</h4>
                  <ul>
                     <li>High-quality Learning Methodologies</li>
                     <li>Temperate Climate</li>
                     <li>Liveable Cities</li>
                     <li>Greatest Food Culture</li>
                     <li>Strong Economy</li>
                  </ul>
               </div>
               <div class="btn-link">
                  <a href="{{ url('visa/australia/benefits') }}">Get Details<span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>	
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="flag-box">
               <div class="img-box">
                  <img class="card-img-top" src="{{ asset('public/assets/user') }}/images/germany.png" alt="Card image cap" class="img-responsive">   
               </div>
               <div class="text-box-flag">
                  <h4 class="card-title yellow_line">GERMANY</h4>
                  <ul>
                     <li>Highest standard of Living</li>
                     <li>Good Work-life balance</li>
                     <li>Easy reach to other European countries</li>
                     <li>High standard of Healthcare</li>
                     <li>Excellent Public Transport </li>
                  </ul>
               </div>
               <div class="btn-link">
                  <a href="{{ url('visa/germany/benefits') }}">Get Details<span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>	
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="flag-box">
               <div class="img-box">
                  <img class="card-img-top" src="{{ asset('public/assets/user') }}/images/UK_flag.png" alt="Card image cap" class="img-responsive">   
               </div>
               <div class="text-box-flag">
                  <h4 class="card-title red_line">UK</h4>
                  <ul>
                     <li>Population Diversity</li>
                     <li>Access to Free Education</li>
                     <li>Good standard of Healthcare</li>
                     <li>Strong Labour Laws</li>
                     <li>Country of Arts, Culture & Sports</li>
                  </ul>
               </div>
               <div class="btn-link">
                  <a href="{{ url('visa/uk/benefits') }}">Get Details <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>	
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="flag-box">
               <div class="img-box">
                  <img class="card-img-top" src="{{ asset('public/assets/user') }}/images/austrlia.png" alt="Card image cap" class="img-responsive">   
               </div>
               <div class="text-box-flag">
                  <h4 class="card-title blue_line">NEW ZEALAND</h4>
                  <ul>
                     <li>Scenic Beauty</li>
                     <li>Work-Life balance</li>
                     <li>Progressive Society </li>
                     <li>Mild Climate</li>
                     <li>Entrepreneurial opportunities</li>
                  </ul>
               </div>
               <div class="btn-link">
                  <a href="{{ url('visa/newzealand/benefits') }}">Get Details <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>	
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="service-slideArea">
   <div class="container">
      <div class="abt-info2">
         <div class="row">
            <div class="col-md-6">
               <div class="themestek-wrap-cell">
                  <!--<h4 class="themestek-custom-heading ">CHOOSE YOUR VISA </h4>-->
                  <h2 class="themestek-custom-heading "> Find The Most Reliable &<br>
                     <em>Transparent Guidance For Every Type Of Visas</em>
                  </h2>
               </div>
            </div>
            <div class="col-md-6">
               <div class="wpb_wrapper">
                  <p>Let us help you with the Visa application process with the most authentic and transparent approach. Whether you are a working professional, a student, or a visitor seeking assistance in choosing the right Visa, we can always help.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="owl-carousel owl-theme" id="service-slide-new">
         <div class="item">
            <div class="insed-service">
               <h4>PR Visa</h4>
               <div class="icon-service">
                  <img src="{{ asset('public/assets/user') }}/new-icon/business-visa.png" alt="visa-icon"> 
               </div>
               <div class="basciInfo">
                  Become a permanent residence of Canada, Australia, UK, Germany & New Zealand
               </div>
               <a href="#"></a>
            </div>
         </div>
         <div class="item">
            <div class="insed-service">
               <h4>Student  Visa</h4>
               <div class="icon-service">
                  <img src="{{ asset('public/assets/user') }}/new-icon/consler-visa.png" alt="visa-icon"> 
               </div>
               <div class="basciInfo">
                  Broaden your Career with abundant study opportunities
               </div>
               <a href="#"></a>
            </div>
         </div>
         <div class="item">
            <div class="insed-service">
               <h4>Family  Visa</h4>
               <div class="icon-service">
                  <img src="{{ asset('public/assets/user') }}/new-icon/diploma-visa.png" alt="visa-icon"> 
               </div>
               <div class="basciInfo">
                  <!-- Simple Refugee content to popular Visa Lorem is not belief Country random visa -->
                  Sponsor your family members and bring them to CANADA
               </div>
               <a href="#"></a>
            </div>
         </div>
         <div class="item">
            <div class="insed-service">
               <h4>Job Seeker Visa</h4>
               <div class="icon-service">
                  <img src="{{ asset('public/assets/user') }}/new-icon/family-visa.png" alt="visa-icon"> 
               </div>
               <div class="basciInfo">
                  Global market with endless work opportunities for qualified workers 
               </div>
               <a href="#"></a>
            </div>
         </div>
         <div class="item">
            <div class="insed-service">
               <h4>Tourist  Visa</h4>
               <div class="icon-service">
                  <img src="{{ asset('public/assets/user') }}/new-icon/tourist-visa.png" alt="visa-icon"> 
               </div>
               <div class="basciInfo">
                  <!-- Tourist Visa to popular belief, Lorem Ipsum is not simply random text -->
                  Explore the World of Opportunities and Possibilities with TOURIST visa
               </div>
               <a href="#"></a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="el-gibilityAnd-breaking">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="LatestUpdates">
               <div class="row">
                  <div class="col-md-6">
                     <!-- <div class=" logo_custom">
                        <a href="http://localhost/iii"><img src="http://localhost/iii/public/assets/user/images/newlogo.png" alt="logo" class="img-responsive"></a>
                        </div> -->
                     <div class=" logo_2">
                        <img src="{{ asset('public/assets') }}/images/Logo1_new.jpeg" class="img-responsive" alt="logo">
                     </div>
                     <div class=" logo_3">
                        <img src="{{ asset('public/assets') }}/images/logo _2.jpeg" class="img-responsive" alt="logo">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="updateSlide">
                        <div class="label ripple">Latest Updates</div>
                        {{-- <div class="news-ticker2"> --}}
                           {{-- <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();"
                               loop="infinite">
                              <ul>
                                 @foreach($blog as $value)
                                 <li>
                                    <a href="{{ route('detailblog',$value['seo_url']) }}">{{ substr($value['name'],0,15) }}... <i class="fa fa-angle-double-right"> </i></a>
                                 </li>
                                 @endforeach
                              </ul>
                           </marquee> --}}
                           <style>
                           .marquee-block {
                              height: 350px;
                              width: 100%;
                              display: block;
                              overflow: hidden;
                              position: relative;
                              margin-top: 10px;
                           }
                           .marquee-inner{
                              display: block;
                              position: absolute;
                           }
                           .marquee-inner ul li a {
                              color: #2d3845;
                              padding: 10px;
                              border-left: 4px solid red;
                              margin-bottom: 6px;
                              display: inline-block;
                           }
                           .marquee-inner.slideTop{
                              animation: marqueeTop 10s linear infinite;
                           }
                           @keyframes marqueeTop{
                              0% {
                                 top: 0;
                              }
                              100% {
                                 top: -100%;
                              }
                           }
                           </style>
                           <div class="marquee-block">
                              <div class="marquee-inner slideTop">
                                 <ul>
                                    @foreach($blog as $value)
                                    <li class="marquee-item">
                                       <a href="{{ route('detailblog',$value['seo_url']) }}">{{ substr($value['name'],0,15) }}... <i class="fa fa-angle-double-right"> </i></a>
                                    </li>
                                    @endforeach
                                 </ul>
                              </div>
                           </div>
                        {{-- </div> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="elgibleBlock">
               <h4 class="underline">CHECK YOUR ELIGIBILITY</h4>
               <ul>
                  <li>
                     <a href="{{ url('check/canada') }}">
                        <img src="{{ asset('public/assets/user') }}/images/ca.png" class="rounded float-left" alt="..." style="width: 30%" class="img-responsive">
                        <p class="card-text">CANADA</p>
                     </a>
                  </li>
                  <li>
                     <a href="{{ url('check/australia') }}">
                        <img src="{{ asset('public/assets/user') }}/images/flag-aust.png" class="rounded float-left" alt="..." style="width: 30%" class="img-responsive">
                        <p class="card-text">AUSTRALIA</p>
                     </a>
                  </li>
                  <li>
                     <a href="{{ url('check/germany') }}">
                        <img src="{{ asset('public/assets/user') }}/images/germany.png" class="rounded float-left" alt="..." style="width: 30%" class="img-responsive">
                        <p class="card-text"> GERMANY</p>
                     </a>
                  </li>
                  <li>
                     <a href="{{ url('check/uk') }}">
                        <img src="{{ asset('public/assets/user') }}/images/UK_flag.png" class="rounded float-left" alt="..." style="width: 30%" class="img-responsive">
                        <p class="card-text">UK</p>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="testomonalArea-new">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="textmonail-sliderBox-new">
               <div class="testimonial-slide">
                  <h5></h5>
                  <!-- <h2><strong>Support </strong>You can count on</h2> -->
                  <h2><strong> What People </strong>Have To Say About Us</h2>
               </div>
               <div class="owl-carousel owl-theme" id="testimonial-slide-new">
                  @foreach($testimonial as $testimonial)
                  <div class="item">
                     <div class="testimonials">
                        <div class="testimonial-info-user">
                           <div class="images_box">
                              <div class="testimonial_img">
                                 <img class="img-center" src="{{ asset('public/assets/images/'.$testimonial['image']) }}" alt="{{ $testimonial['alt'] }}">
                              </div>
                           </div>
                           <div class="testimonial_caption">
                              <h6>{{ $testimonial['name'] }}</h6>
                              <span>{{ $testimonial['post'] }}</span>
                           </div>
                           <div class="quoteIcon">
                              <span class="material-icons"><i class="fas fa-quote-right"></i></span>
                           </div>
                        </div>
                        <div class="testimonial_content">
                           <p>{!! $testimonial['description'] !!}</p>
                        </div>
                        <div class="rateStar">
                           <ul>
                              <li><span class="material-icons"><i class="fas fa-star"></i></span></li>
                              <li><span class="material-icons"><i class="fas fa-star"></i></span></li>
                              <li><span class="material-icons"><i class="fas fa-star"></i></span></li>
                              <li><span class="material-icons"><i class="fas fa-star"></i></span></li>
                              <li><span class="material-icons"><i class="fas fa-star-half"></i></span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="girl-img">
      <img  src="{{ asset('public/assets/user') }}/images/test-side.webp">
   </div>
</div>
<div class="moreSomeArea">
   <div class="container">
      <div class="abt-info">
         <div class="row">
            <div class="col-md-6">
               <div class="themestek-wrap-cell">
                  <!-- <h4 class="themestek-custom-heading ">Quick Contact Us</h4> -->
                  <!-- <h2 class="themestek-custom-heading ">Free Online Visa Assessment<br>
                     <em>In Any Type Of Visa</em>
                     </h2> -->
                  <h2><strong>Support </strong>You can count on</h2>
               </div>
            </div>
            <div class="col-md-6">
               <div class="wpb_wrapper">
                  <!--<p>Contact us today by fill up free online visa assessment and we will contact you-->
                  <!--   <a href="{{ route('harshit-rai') }}">Contact Us <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>-->
                  <!--</p>-->
                  <!-- <p>
                     <a href="{{ route('harshit-rai') }}">Contact Us <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>  
                     
                     </p> -->
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <ul>
               <li>
                  <div class="insed-service2">
                     <div class="icon-service">
                        <span class="material-icons"><i class="fab fa-chromecast"></i></span>
                     </div>
                     <h4> Zoom/Skype Meetings</h4>
                     <div class="basciInfo">
                        We value your time. Schedule a virtual meeting and get convenient consultation anywhere, anytime
                     </div>
                     <a href=""></a>
                  </div>
               </li>
               <li>
                  <a href="{{url('contact-us')}}">
                     <div class="insed-service2">
                        <div class="icon-service">
                           <span class="material-icons"><i class="fas fa-street-view"></i></span>
                        </div>
                        <h4> Direct Visit</h4>
                        <div class="basciInfo" style="color:#212529;">
                           Meet the dedicated team of Triple I consultants and immigration experts on any working day
                        </div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="tel:+01146520736">
                     <div class="insed-service2">
                        <div class="icon-service">
                           <span class="material-icons"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <h4> Call Facilities</h4>
                        <div class="basciInfo" style="color:#212529;">
                           Call us to get quick support for any visa info. Our call facilities are always available between 10 am - 6 pm
                        </div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="mailto:info@tripleibusiness.com">
                     <div class="insed-service2">
                        <div class="icon-service">
                           <span class="material-icons"><i class="fas fa-envelope-open-text"></i></span>
                        </div>
                        <h4>  E-Mail</h4>
                        <div class="basciInfo" style="color:#212529;">
                           Don’t be in a queue of calls. Mail your queries to us and get support directly in your inbox
                        </div>
                  <a href="#"></a>
                  </div>
                  </a>
               </li>
               <li>
                  <div class="insed-service2">
                     <div class="icon-service">
                        <span class="material-icons"><i class="fas fa-comments-dollar"></i></span>
                     </div>
                     <h4> Social Media</h4>
                     <div class="basciInfo">
                        Connect with us on every social media channel. We are everywhere to guide you
                     </div>
                     <ul class="f-social-m card_social" style="padding:10px;">
                        <li><a href="https://www.facebook.com/TripleIBusiness" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a></li>
                        <li><a href="https://twitter.com/Tripleibusines" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i> </a></li>
                        <li><a href="https://www.instagram.com/triplei_business" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i> </a></li>
                        <li><a href="https://www.linkedin.com/company/tripleibusiness" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i> </a></li>
                        <li><a href="https://www.youtube.com/channel/UCE470WjyWb-sqK78RO44ryw"><i class="fab fa-youtube" aria-hidden="true"></i> </a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- --------//popup box//------ -->
<div id="boxes" style="background-color: #0f6775;" class="d-none">
   <div  id="dialog" class="window" >
      <div id="san" >
         <a href="#" class="close agree"><img src="{{ asset('public/assets/user') }}/images/close-icon.png" width="25"   class="img-responsive"></a>
         <div class="container"  >
            <div class="row"  >
               <!-- 
                  <div class="col-lg-8 col-lg-offset-2"> -->
               <h5>GET IN TOUCH</h5>
               <form action="{{ url('addcontact/') }}" method="post" role="form" id="popup_enqfrm">
                  {{ csrf_field() }}
                  <div class="messages"></div>
                  <div class="controls">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group fg">
                              <!-- <label for="form_name">Firstname *</label> -->
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name *" required="required" data-error="Firstname is required.">
                              <div id="form_name_error_msg" class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group fg">
                              <!-- <label for="form_lastname">GET IN TOUCH</label> -->
                              <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Last Name *" required="required" data-error="Lastname is required.">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group fg">
                              <!--  <label for="form_email">Your Email *</label> -->
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                              <div id="form_email_error_msg" class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group fg">
                              <!-- <label for="form_phone">Phone</label> -->
                              <input id="form_phone" type="tel" name="mobile" class="form-control" placeholder="Phone *">
                              <div id="form_phone_error_msg" class="help-block with-errors"></div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group fg">
                              <!--     <label for="form_message">Message *</label> -->
                              <textarea id="form_message" name="message" class="form-control" onpaste="return false;" autocomplete="off" placeholder="Your message " rows="4" required data-error="Please,leave us a message."></textarea>
                              <div id="form_message_error_msg" class="help-block with-errors"></div>
                           </div>
                        </div>
                        <div class="col-md-12 con_custom">
                           <input type="button" class="btn  btn-primary" id="popup_enqfrm_btn" name="popup_enqfrm_btn" value="SEND MESSAGE">
                        </div>
                     </div>
                  </div>
               </form>
               <!--   </div> -->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- --------//popup box end//------ -->
@endsection