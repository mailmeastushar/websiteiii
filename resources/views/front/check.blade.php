@extends('front/master')
@section('meta_title', $meta['title'])
@section('meta_description', $meta['description'])
@section('container')

<div>
	<img src="{{ asset('public/assets/images/'.$data['image'] )}}" style="width: 100%" height="auto" alt="{{ $data['alt'] }}" class="img-responsive">
</div>
			

<!-- ---fixed social media start----->
<div class="fixed_social_media">
<nav>
    <ul>
        <li><a href="https://www.facebook.com/TripleIBusiness" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a></li>
        <li><a href="https://twitter.com/Tripleibusines" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a></li>
        <li><a href="https://www.instagram.com/triplei_business" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a></li>
        <li><a href="https://www.linkedin.com/company/tripleibusiness" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>Youtube</span></a></li>
      
    </ul>
</nav>
</div>
<!-- ---fixed social media end//----->

<!-- ----fixed side contact form start----- -->
<form method="post" action="{{ url('addcontact/') }}">
 {{ csrf_field() }}   
<button type="button" id="Toggle_formButton" >Contact Here!</button>

<div class="fixed_sidecontact " id="showsidecontent">
<div id="slider">

<div id="header">
    <a href="#" id="closeicon"><img src="{{ asset('public/assets/user') }}/images/close-icon.png" width="25" class="img-responsive" alt="Triple I Business Image"></a>
<h4>Contact Here</h4>
<input  name="name"  type="text" placeholder="Your Name">
<input  name="email" type="text" placeholder="Your Email">
<input  name="mobile" type="text" placeholder="Your Mobile">
<button>Send Message</button>
</form>
</div>
</div>
</div>
<!-- ----fixed side contact form end//----- -->




<div class="arti_cle">
<div class="container">
<div class="row">
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
<div class="content-section">

<h4>{{ $data['country_name'] }}</h4>

<p style="color: black">{!! $data['description'] !!}</p>




</div>
<div class="card-deck flag_custom1 ">
<div class="card">
<a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/ca.png" alt="Card image cap" class="img-responsive"></a>
<div class="card-body">
<center><a href=""><h5 class="card-title">CANADA</h5></a></center>

</div>
</div>
<div class="card">
<a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/austrlia.png" alt="Card image cap" class="img-responsive"></a>
<div class="card-body">
<center><a href=""><h5 class="card-title">AUSTRALIA</h5></a></center>

</div>
</div>
<div class="card">
<a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/germany.png" alt="Card image cap" style="height: 100px;" class="img-responsive"></a>
<div class="card-body">
<center> <a href=""><h5 class="card-title">GERMANY</h5></a></center>

</div>
</div>

</div>
<div class="card-deck flag_custom2">
	<div class="card">
<a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/UK_flag.png" alt="Card image cap" style="height: 100px;" class="img-responsive"></a>
<div class="card-body">
<center><a href=""><h5 class="card-title">UK</h5></a></center>  

</div>
</div>
<div class="card">
<a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/austrlia.png" alt="Card image cap" class="img-responsive"></a>
<div class="card-body">
<center> <a href=""><h5 class="card-title">NEW ZEALAND</h5></a></center>
</div>
</div> 
</div>


</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

<div class="sidebar-item">
<div class="make-me-sticky">
<div class="list-group">
<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-between">
<h5 class="mb-3">Talk to our Immigration Experts</h5>
<!--  <small>3 days ago</small> -->
</div>


<p class="mb-3" style="color: #8a8181;font-size: 1rem;font-weight: bold"> <i class="fa fa-phone" aria-hidden="true"></i>  +011 46520736</p>
<p class="mb-1" style="color: #8a8181;font-size: 1rem;font-weight: bold">    <i class="fa fa-whatsapp" aria-hidden="true"></i>  +91 8595744633</p>

</a>
<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-between">
<h5 class="mb-3">Support</h5>

</div>
<p class="mb-2" style="color: #8a8181;font-size: 1rem;font-weight: bold"><i class="fa fa-clock-o" aria-hidden="true"></i> Monday to saturday- 9AM to 7PM</p>

</a>

</div>

<div class="d-flex" id="wrapper_custom">
<!-- Sidebar -->
<div class="bg-light border-right vh-80" id="sidebar-wrapper">
<div class="sidebar-heading">Hot Links </div>
<div class="list-group list-group-flush overflow-auto h-100">
<a href="{{ url('visa/canada/pr/federal-skilled-worker-program') }}" class="list-group-item list-group-item-action bg-light">Ferdal Skilled Worker Program(Canada)</a>
<a href="{{ url('visa/canada/pr/provincial-nominee-program-(pnp)') }}" class="list-group-item list-group-item-action bg-light">Province Nomination Program(Canada)</a>
<a href="{{ url('visa/australia/skilled/skilled-independent-visa-subclass-189') }}" class="list-group-item list-group-item-action bg-light">189 Visa(Australia)</a>
<a href="{{ url('visa/australia/skilled/skilled-nominated-subclass-190-visa') }}" class="list-group-item list-group-item-action bg-light">190 Visa(Australia)</a>
<a href="{{ url('visa/germany/germany-job-seeker-visa') }}" class="list-group-item list-group-item-action bg-light">Job Seeker(Germany)</a>
<a href="{{ url('visa/uk/study') }}" class="list-group-item list-group-item-action bg-light">Study(UK)</a>
<a href="{{ url('visa/canada/study') }}" class="list-group-item list-group-item-action bg-light">Study(Canada)</a>
<a href="{{ url('blog/') }}" class="list-group-item list-group-item-action bg-light">Latest Update</a>


</div>
</div>

</div>

</div>





</div>
</div>
</div>
</div>
</div>


<div class="gradient_bc">
<div class="container">
<div class="row">
<div class="col-md-4 col-xl-3">
<div class="card bg-c-blue order-card">
<div class="card-block">
<center><h5 class="m-b-20"> Consult</h5></center>
<center class="mb-3" ><i class="fa fa-rocket f-center"></i></center>

<p >Our experts have spent years helping candidates immigrating abroad. Request a free consultation to learn how we can help you immigrate.</p>
</div>
</div>
</div>

<div class="col-md-4 col-xl-3">
<div class="card bg-c-green order-card">
<div class="card-block">
<center><h5 class="m-b-20">Apply</h5></center>
<center class="mb-3" ><i class="fa fa-rocket f-center"></i></center>
<p>You don't need to spend hours going through articles on the internet, learn about the steps to apply by consulting our immigration experts.</p>

</div>
</div>
</div>

<div class="col-md-4 col-xl-3">
<div class="card bg-c-yellow order-card">
<div class="card-block">
<center><h5 class="m-b-20">Documentation</h5></center>
<center class="mb-3" ><i class="fa fa-rocket f-center"></i></center>
<p> It`s a vital part of the process and a small mistake could spoil entire efforts, Our experienced consultants can help you avoid such mistakes.</p>
</div>
</div>
</div>

<div class="col-md-4 col-xl-3">
<div class="card bg-c-pink order-card">
<div class="card-block">
<center><h5 class="m-b-20">Relationship</h5></center>
<center class="mb-3"><i class="fa fa-rocket f-center"></i></center>
<p>Our relation doesn't end by getting you the visa, Our team is committed to helping you with every step of the immigration process.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ---------- -->

<section class="ftco-section ftco-no-pt ftc-no-pb">
<div class="container" style="margin-top: 0px;">




</div>
<!-- -----apply now button start----- -->
<div class="apply_details_button">
<div class="container-fluid">
<div class="row">
<img  src="{{ asset('public/assets/user') }}/images/91.jpg" alt="Card image cap" style="width: 100%" class="img-responsive">
<div class="crs_button">
<span><a href="{{ url('assessment_form/') }}" style="text-decoration: none"><button class="more" style="color: #fff;font-weight: bold;font-size: 1.2em;">APPLY NOW</button></a></span>

</div>

</div>
</div>
</div>
<!-- -----apply now button end----- --> 
</section>
<div class="about_custom">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
 

<h2>Who We Are?</h2> 
<p>Triple I Business is one of the growing companies in Delhi NCR providing Consultancy services for Permanent Residency and Study visas in Canada, Australia, Germany, UK, and many other countries, we also offer Visa services for Tourist Visas and Visitor Visa.</p>

<p>Established in 2014 with a vision to bring transparency to Visa seeker in India, We found that Visa Seekers in India is facing a lot of issues, there is a lack of information on the process, transparency is missing, mis-selling is on the all-time high and our purpose is to curb the issues in the immigration and visa process faced by Visa Seekers. We offer visa seekers an opportunity to connect verified Immigration consultants from Canada, Australia, Germany, and the UK and let the papers handled by the experts in Immigration Industry.</p>


</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 about_us_second">

 <h6 style="font-weight: bold">Vision</h6 style="font-weight: bold">
<p>
Triple I Business work with accredited immigration lawyers from Canada, Australia, Germany, and the UK, we offer visa seekers the opportunities to connect with verified Immigration consultants and let the papers handled by the experts in Immigration Industry.</p>

 
 <h6 style="font-weight: bold">Mission</h6 style="font-weight: bold">
<p>Triple I Business is founded by young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers flexible payment options for the visa Seekers to process their application without putting a burden in their pockets young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers .</p>

 




</div>


</div>

</div>

</div>

<!-- <div class="container">
<button><a href={{ url('contact/') }}><span  class="btn btn-primary">Apply Now</span></a></button>
</div> -->
@endsection
