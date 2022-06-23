@extends('front/master')
@section("meta_title",$top['meta_title'])
<!--@section("meta_keywords","Study in Canada, Study in Australia, Study in Germany, Study in the UK, Master`s in Abroad, Study Abroad, Best study visa consultant in India, Best study visa company in India")-->
@section("meta_description",$top['meta_description'])
@section('container')
{{-- @foreach($data as $data)
@if(!empty($data['image']))
@endif
@endforeach --}}
<div class="row">
   <img  src="{{ asset('public/assets/images/'.$top['image']) }}" alt="{{ $top['alt'] }}" style="width: 100%" height="auto" alt="" class="img-responsive">
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
         </div>
      </div>
   </div>
</form>
<style>
p {
    color: #000;
    font-size: 14px;
}
</style>
<!-- ----fixed side contact form end//----- -->
<div class="arti_cle ">
   <div class="container">
      <div class="row">
         <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div class="content-section">
               @php
               $a=0
               @endphp

               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3 mb-3">
                  <h1>{{ $top['name'] }}</h1>
                  <div>{!! $top['description'] !!}</div>
               </div>
               @foreach($main as $value)
               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                  <img class="card-img-top" src="{{ asset('public/assets/images/'.$value['image']) }}" class="img-responsive" alt="{{ $value['alt'] }}">
               </div>
               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                  <h2 style="font-weight: bold;">{!! $value['name'] !!}</h2>
                  <p>{!! $value['description'] !!}</p>
               </div>
               @endforeach
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <div class="sidebar-item">
               <div class="make-me-sticky">
                  <div class="list-group">
                     <span class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                           <h5 class="mb-3">Talk to our Immigration Experts</h5>
                           <!--  <small>3 days ago</small> -->
                        </div>
                        <p class="mb-3" style="color: #8a8181;font-size: 1rem;font-weight: bold"> <a style="color:#8a8181" href="tel:+01146520736"><i class="fas fa-phone-alt" style="color: #DA1F26;"> </i>  +011 46520736 </a></p>
                        <p class="mb-1" style="color: #8a8181;font-size: 1rem;font-weight: bold"> <a style="color:#8a8181"href="https://api.whatsapp.com/send?phone=918595744633" target="blank"><i class="fab fa-whatsapp" aria-hidden="true"></i>  +91 8595744633</a></p>
                     </span>
                     <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                           <h5 class="mb-3">Support</h5>
                        </div>
                        <p class="mb-2" style="color: #8a8181;font-size: 1rem;font-weight: bold"><i class="fa fa-clock-o" aria-hidden="true"></i> Monday to saturday- 10AM to 6PM</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- -----apply now button start----- -->
<div class="apply_details_button">
   <div class="container-fluid">
      <div class="row">
         <img  src="{{ asset('public/assets/user') }}/images/91.jpg" class="img-responsive" alt="Card image cap" style="width: 100%">
         <div class="crs_button">
            <span><a href="{{ url('assessment/') }}" style="text-decoration: none"><button class="more" style="color: #fff;font-weight: bold;font-size: 1.2em;">APPLY NOW</button></a></span>
         </div>
      </div>
   </div>
</div>
<!-- -----apply now button end----- --> 
{{-- <section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container" style="margin-top: 0px;">
      <div class="row no-gutters">
         <div class="col-md-12 wrap-about py-4 py-md-5 ftco-animate">
            <div class="bs-example">
               <div class="accordion" id="accordionExample">
                  @foreach($faq as $faq)
                  @if(!empty($faq['faq']))
                  <div class="card">
                     <div class="card-header" id="headingone">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#A{{$faq['id']}}"><i class="fa fa-plus"></i>{{ $faq['faq'] }}</button>
                        </h2>
                     </div>
                     <div id="A{{$faq['id']}}" class="collapse hide" aria-labelledby="headingone" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>{{ $faq['answer'] }}</p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- -----apply now button start----- -->
   <div class="apply_details_button">
      <div class="container-fluid">
         <div class="row">
            <img  src="{{ asset('public/assets/user') }}/images/91.jpg" alt="Card image cap" style="width: 100%" class="img-responsive">
            <div class="crs_button">
               <span><a href="{{ url('assessment/') }}" style="text-decoration: none"><button class="more" style="color: #fff;font-weight: bold;font-size: 1.2em;">APPLY NOW</button></a></span>
            </div>
         </div>
      </div>
   </div>
   <!-- -----apply now button end----- --> 
</section> --}}
@endsection