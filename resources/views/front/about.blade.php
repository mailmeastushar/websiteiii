@extends('front.master')
@section("meta_title",$data->meta_title)
@section("meta_keywords",$data->meta_keywords)
@section("meta_description","Triple I Business is one of the leading visa and immigration consultancies in India helping Students, Skilled workers to get a PR visa, Study Visa, & Work Visa.")
@section('container')
@if(!empty($data['image']))
<div class="abtImg">
   <img src="{{ asset('public/assets/images/'.$data['image'] )}}" style="width: 100%" height="450" alt="{{ $data['alt'] }}" class="img-responsive">
</div>
@endif
<div class="more-info about-info">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="more-info-content">
               <div class="row">
                  <div class="col-md-6 align-self-center">
                     <div class="right-content">
                        <!--<span>our solid background on finance</span>-->
                        <h2>Get to know about <em>our company</em></h2>
                        <p>Triple I Business is one of the growing companies in Delhi NCR, providing consultancy services for Permanent Residency and Study Visas in Canada, Australia, Germany, UK, and many other countries. We also offer Visa services for Tourist visas and Visitor visas.</p>
                        <p>Established in 2014 with a vision to bring transparency to Visa seekers in India, we found that Visa Seekers in India are facing a bunch of issues. There is a lack of information in the process, transparency is missing, mis-selling is on an all-time high. Our purpose is to curb the issues in the immigration and visa process, faced by Visa Seekers. We offer visa seekers an opportunity to connect verified Immigration consultants from Canada, Australia, Germany, and the UK, and let the papers be handled by experts in the Immigration Industry.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="left-image">
                        <img src="public/assets/images/about-img.jpeg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="about_custom abt-page">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="innerABT">
               <h6  >Vision</h6>
               <p>
                  Triple I Business envisions providing authentic information, ease of communication, and standard guidance to every aspirant who wishes to settle abroad. 
               </p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="innerABT">
               <h6  >Mission</h6>
               <p>Triple I Business is founded by young entrepreneurs who understand the value of Customer Relationships and Trust. Triple I offers flexible payment options for visa Seekers to process their applications without putting a burden in their pockets. young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers </p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="innerABT">
               <h6>OUR CORE VALUES</h6>
               <p>
                  Triple I stand for “Intention” “Integrity” and “Impact”.  We believe anything is done with good intention and honest integrity definitely has a positive impact to make the world better. 
               </p>
               <p><i class="fa fa-check" aria-hidden="true" style="font-size: 0.8em;color: #28cce1;"></i> Customer First</p>
               <p><i class="fa fa-check" aria-hidden="true" style="font-size: 0.8em;color: #28cce1;"></i> Transparency</p>
               <p><i class="fa fa-check" aria-hidden="true" style="font-size: 0.8em;color: #28cce1;"></i> Making Visa Processing Secured</p>
            </div>
         </div>
         <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">-->
         <!--<h2>Who We Are?</h2> -->
         <!--<p>Triple I Business is one of the growing companies in Delhi NCR providing Consultancy services for Permanent Residency and Study visas in Canada, Australia, Germany, UK, and many other countries, we also offer Visa services for Tourist Visas and Visitor Visa.</p>-->
         <!--<p>Established in 2014 with a vision to bring transparency to Visa seeker in India, We found that Visa Seekers in India is facing a lot of issues, there is a lack of information on the process, transparency is missing, mis-selling is on the all-time high and our purpose is to curb the issues in the immigration and visa process faced by Visa Seekers. We offer visa seekers an opportunity to connect verified Immigration consultants from Canada, Australia, Germany, and the UK and let the papers handled by the experts in Immigration Industry.</p>-->
         <!--</div>-->
         <!--<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12info_section">-->
         <!-- <h6 style="font-weight: bold">Vision</h6 style="font-weight: bold">-->
         <!--<p>-->
         <!--Triple I Business work with accredited immigration lawyers from Canada, Australia, Germany, and the UK, we offer visa seekers the opportunities to connect with verified Immigration consultants and let the papers handled by the experts in Immigration Industry.</p>-->
         <!-- <h6 style="font-weight: bold">Mission</h6 style="font-weight: bold">-->
         <!--<p>Triple I Business is founded by young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers flexible payment options for the visa Seekers to process their application without putting a burden in their pockets young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers .</p>-->
      </div>
      <!--<div class="col-xl">-->
      <!--	<h5 style="font-weight: bold;">OUR CORE VALUES</h5>-->
      <!--	<p>-->
      <!--Triple I stand for “Intention” “Integrity” and “Impact” we believe that if we do anything with good intention and show honest integrity, it will definitely have a positive impact to make the world better.</p>-->
      <!--<p><i class="fa fa-circle" aria-hidden="true" style="font-size: 0.8em"></i> Customer First</p>-->
      <!--<p><i class="fa fa-circle" aria-hidden="true" style="font-size: 0.8em"></i> Transparency</p>-->
      <!--<p><i class="fa fa-circle" aria-hidden="true" style="font-size: 0.8em"></i> Making Visa Processing Secured</p>-->
      <!--</div>-->
   </div>
   <!-- @if(!empty($data['image']))
   <h5 style="margin-top: 25px;font-weight: bold">{{ $data['name'] }}</h5>
   @else
   <h5 style="margin-top: -15px;font-weight: bold">{{ $data['name'] }}</h5>
   @endif
   {!! $data['description'] !!} -->
</div>

</div>
@stop