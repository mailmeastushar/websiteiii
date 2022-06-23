@extends('front/master')
@section("meta_title",$top['meta_title'])
<!--@section("meta_keywords","Study in Canada, Study in Australia, Study in Germany, Study in the UK, Master`s in Abroad, Study Abroad, Best study visa consultant in India, Best study visa company in India")-->
@section("meta_description",$top['meta_description'])
@section('container')
{{-- @foreach($data as $data)
@if(!empty($data['image']))
@endif
@endforeach --}}
<!-- ------------form on page start------- -->
<div class="details_banner">
   <div class="container-fluid">
      <div class="row">
         <img  src="{{ asset('public/assets/images/'.$top['image']) }}" alt="{{ $top['alt'] }}">
      </div>
   </div>
</div>

<div class="details_form"style="top:{{Request::segment(3)==''?'7%':'4%'}}">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="registration-form huio">
               <form action="{{ url('addcontact/') }}" method="post">
                  <div class="form-icon">
                     <center><img src="{{ asset('public/assets/user') }}/images/newlogo.png" alt="logo" class="img-responsive" alt="Triple I Business Image"></center>
                  </div>
                  {{ csrf_field() }}
                  <div class="form-group">
                     <input type="text" class="form-control item" name="name" placeholder="First Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control item" name="lname" placeholder="Last name*">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control item" name="email" placeholder="Email*">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control item" name="mobile" placeholder="Mobile no*">
                  </div>
                  <div class="form-group">
                     <textarea class="form-control rounded-0" rows="3" name="message" placeholder="Comments/Queries"></textarea>
                  </div>
                  <div class="form-group">
                     <input type="submit" class="btn btn-center create-account" name="sub" value="Register Now">
                  </div>
               </form>
            </div>
         </div>
         <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 details_form_pad_cus">
            <h1>{{ $top['name'] }}</h1>
            <p>{!! $top['description'] !!}</p>
         </div>
      </div>
   </div>
</div>
<!-- ------------form on page end//------- -->
<!-- ----middle content with tittle start----->
<div class="middle_details">
   <div class="container">
      <div class="row">
         <div class="col"></div>
         <div class="col">
            <div class="middle_tittle">
               Triple I Business
            </div>
         </div>
         <div class="col"></div>
      </div>
   </div>
</div>
</div>
<div class="content_of_details_page">
   <div class="container">
      <div class="row">
         @php
         $a=0
         @endphp
         @foreach($main as $value)
         @if($value['id']%2==0)
         <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 custom_content_of">
            <h2 style="font-weight: bold;">{!! $value['name'] !!}</h2>
            <p>{!! $value['description'] !!}</p>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 custom_content_of">
            <img class="card-img-top" src="{{ asset('public/assets/images/'.$value['image']) }}" class="img-responsive" alt="{{ $value['alt'] }}">
         </div>
         @else
         <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 custom_content_of">
            <img class="card-img-top" src="{{ asset('public/assets/images/'.$value['image']) }}" class="img-responsive" alt="{{ $value['alt'] }}">
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 custom_content_of">
            <h2 style="font-weight: bold">{!! $value['name'] !!}</h2>
            <p>{!! $value['description'] !!}</p>
         </div>
         @endif
         @endforeach
      </div>
   </div>
</div>
<!-- ------content with image end//------- -->
<!-- -----------testimonials start-------- -->
<!-- <div class="testimonials_details">
   <div class="container">
   <div class="row">
   <div class="col">
   	
   </div>
   <div class="col">
   <div class="testimonials_tittle">
   Testimonials
   </div>
   </div>
   <div class="col">
   </div>
   </div>
   </div>
   </div>
   
   <div class="testimonials_reviews">
   <div class="container">
   <div class="row">
   
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
   <p><span class="padded-dropcap"><i class="fa fa-quote-left" aria-hidden="true"></i></span>added Floating Drop Cap.We can add the left lining to the drop cover in order to make room for a background image, being an ad, a decorative element, a banner, a grabber, to attract the reader. In practice, we insert the starting position of an inline element .
   added Floating Drop Cap.We can add the left lining to the drop cover in order to make room for a background image, being an ad, a decorative element, a banner, a grabber, to attract the reader. In practice, we insert the starting position of an inline element . a grabber, to attract the reader. In practice, we insert the starting position of an inline element .  </p> 
   <blockquote class="blockquote text-right">
   <footer class="blockquote-footer" style="color: #000;">Someone famous in <cite title="Source Title">Source Title</cite></footer>
   <p class="mb-1 text-right" style="color: #000;font-size:0.9rem"> Integer posuere erat a ante we insert the .</p>
   
   </blockquote>
   
   </div>
   <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
   <p><span class="padded-dropcap"><i class="fa fa-quote-left" aria-hidden="true"></i></span>added Floating Drop Cap.We can add the left lining to the drop cover in order to make room for a background image, being an ad, a decorative element, a banner, a grabber, to attract the reader. In practice, we insert the starting position of an inline element .
   added Floating Drop Cap.We can add the left lining to the drop cover in order to make room for a background image, being an ad, a decorative element, a banner, a grabber, to attract the reader. In practice, we insert the starting position of an inline element . a grabber, to attract the reader. In practice, we insert the starting position of an inline element .  </p> 
   <blockquote class="blockquote text-right">
   <footer class="blockquote-footer" style="color: #000;">Someone famous in <cite title="Source Title">Source Title</cite></footer>
   <p class="mb-1 text-right" style="color: #000;font-size:0.9rem"> Integer posuere erat a ante we insert the .</p>
   
   </blockquote>
   
   	</div>
   </div>
   </div>
   </div> -->
<!-- -----------testimonials end//-------- -->
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
<!-- <section class="ftco-section ftco-no-pt ftc-no-pb">
   <div class="container" style="margin-top: 0px;">
      <div class="row no-gutters">
         <div class="col-md-12 wrap-about py-4 py-md-5 ftco-animate">
            <div class="bs-example">
               <div class="accordion" id="accordionExample">
                  {{-- @foreach($faq as $faq)
                  @if(!empty($faq['faq']))
                  <div class="card">
                     <div class="card-header" id="headingone">
                        <h2 class="mb-0">
                           <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#A{{$faq['id']}}"><i class="fa fa-plus"></i>{{ $faq['faq'] }}</button>
                        </h2>
                     </div>
                     <div id="A{{$faq['id']}}" class="collapse show" aria-labelledby="headingone" data-parent="#accordionExample">
                        <div class="card-body">
                           <p>{{ $faq['answer'] }}</p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endforeach --}}
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
@endsection