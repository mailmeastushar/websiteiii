@extends('front.master') @section("meta_title",$data->meta_title) @section("meta_keywords",$data->meta_keywords) @section("meta_description",$data->meta_description) @section('container')
<div> <img src="{{ asset('public/assets/images/'.$data['image'] )}}" style="width: 100%" height="auto" alt="{{ $data['alt'] }}" class="img-responsive"> </div>
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
   <button type="button" id="Toggle_formButton">Contact Here!</button>
   <div class="fixed_sidecontact " id="showsidecontent">
      <div id="slider">
         <div id="header">
            <a href="#" id="closeicon"><img src="{{ asset('public/assets/user') }}/images/close-icon.png" width="25" class="img-responsive" alt="Triple I Business Image"></a>
            <h4>Contact Here</h4>
            <input name="name" type="text" placeholder="Your Name">
            <input name="email" type="text" placeholder="Your Email">
            <input name="mobile" type="text" placeholder="Your Mobile">
            <button>Send Message</button>
</form>
</div>
</div>
</div>
<style>
   .comment-div {
      display: flex;
      background-color: whitesmoke;
      padding: 20px 10px;
   }
   .reply-div {
      position: relative;
      display: flex;
      background-color: #fbfafaf2;
      padding: 10px;
   }
   .comment-content {
      width: 100%;
   }
   .comment-text,.reply-text {
      padding-top: 6px;
      font-size: 13px;
   }
   .comment-icon-div .fa {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #153d4c;
      color:#ffffff;
      text-align: center;
      line-height: 35px;
      font-size: 22px;
      margin-right: 10px;
      margin-top: 5px;
   }
   .comment-header {
      display: flex;
      justify-content: space-between;
      padding-right: 10px;
   }
   .comment-user-name,.replyed-by {
      display: inline-grid;
      font-size: 18px;
      font-style: italic;
   }

   button.reply-view-btn {
      border-radius: 25px;
      padding: 2px 18px;
      font-size: 12px;
      text-transform: uppercase;
      color: #153d4c;
      border: 1.5px solid #153d4c;
   }
   button.reply-view-btn:hover {
      background-color: #153d4c;
      color: #fff;
      border: 1.5px solid #153d4c;
   }
   .reply-content {
      text-align: center;
      width: 80%;
      margin: auto;
   }
   .reply-div::after {
      content: "";
      position: absolute;
      left: 50%;
      height: 25px;
      width: 25px;
      background-color: #f5f5f5;
      top: -20px;
      transform: rotate(45deg);
   }
</style>
<!-- ----fixed side contact form end//----- -->
<div class="arti_cle uio">
   <div class="container">
      <div class="row">
         <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
            <div class="content-section">
               <h4>{!! $data['title'] !!}</h4>
               <p style="color: black">{!! $data['description'] !!}</p>
               <div class="row">
                  @if(isset($blog_comments) && !empty($blog_comments))
                     <h3 class="m-auto p-3">Comments</h3>
                     
                     @foreach($blog_comments as $key=>$blog)
                        @if(!empty($blog['message']) && !is_null($blog['message']))
                        <div class="col-12 mb-1">
                           <div class="comment-div w-100">
                              <div class="comment-icon-div">
                                 <i class="fa fa-user"></i>
                              </div>
                              <div class="comment-content">
                                 <div class="comment-header">
                                    <div class="comment-user-name">
                                       <span class="text-info" style="font-size:18px;">{{ucwords($blog['name'])}}</span>
                                       <small class="text-muted"><i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{date('d-m-Y H:i A',strtotime($blog['created_at']))}}</small>
                                    </div>
                                    @if(!empty($blog['reply']) && !is_null($blog['reply']))
                                    <div class="comment-reply-btn">
                                       <button type="button" class="reply-view-btn" onclick="showReply('{{$key}}');">View Reply</button>
                                    </div>
                                    @endif
                                 </div>
                                 <div class="comment-text">
                                    {{$blog['message']}}
                                 </div>
                              </div>
                           </div>
                           @if(!empty($blog['reply']) && !is_null($blog['reply']))
                           <div class="reply-div w-100 d-none" id="reply-div{{$key}}">
                              <div class="reply-content">
                                 <div class="reply-text">
                                    {{$blog['reply']}}
                                 </div>
                                 <div class="replyed-by">
                                    <span class="text-info" style="font-size: 14px;font-style: italic;text-decoration: overline;">Triple I Business</span>
                                 </div>
                              </div>
                           </div>
                           @endif
                        </div>
                        @endif
                     @endforeach
                  @endif
               </div>
               <div class="callback-form contact-us p-3 mb-3">
                  <div class="contact-form mb-4">
                  <form id="blog_comment_form" action="{{ url('addblogcomment/') }}" name="blog_comment_form" method="post">
                     {{ csrf_field() }}
                     <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <fieldset>
                           <input type="text" class="form-control" name="blog_name" id="blog_name" placeholder="Name..." />
                           <span id="blog_name_error_msg" class="error"></span>
                           </fieldset>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <fieldset>
                           <input type="text" class="form-control number" maxlength="20" minlength="10" name="blog_mobile" id="blog_mobile" placeholder="Mobile..." />
                           <span id="blog_mobile_error_msg" class="error"></span>
                           </fieldset>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <fieldset>
                           <input type="text" class="form-control" name="blog_email" id="blog_email" placeholder="E-mail..." />
                           <span id="blog_email_error_msg" class="error"></span>
                           </fieldset>
                        </div>
                        <div class="col-lg-12">
                           <fieldset>
                           <textarea class="form-control" rows="6" name="blog_comment" onpaste="return false;" autocomplete="off" id="blog_comment" placeholder="Leave your comments here..." style="height:150px;"></textarea>
                           <span id="blog_comment_error_msg" class="error"></span>
                           </fieldset>
                        </div>
                        <div class="col-lg-12">
                           <fieldset>
                              <input type="hidden" name="blog_id" value="{{$data['id']}}">
                           <button type="button" id="blog_comment_submit_btn" name="blog_comment_submit_btn" class="filled-button">Submit</button>
                           </fieldset>
                        </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- <div class="card-deck flag_custom1 ">
               <div class="card">
                  <a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/ca.png" class="img-responsive" alt="Card image cap"></a>
                  <div class="card-body">
                     <center>
                        <a href="{{ url('front_flag/CANADA') }}">
                           <h5 class="card-title">CANADA</h5>
                        </a>
                     </center>
                  </div>
               </div>
               <div class="card">
                  <a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/austrlia.png" class="img-responsive" alt="Card image cap"></a>
                  <div class="card-body">
                     <center>
                        <a href="{{ url('front_flag/AUSTRALIA') }}">
                           <h5 class="card-title">AUSTRALIA</h5>
                        </a>
                     </center>
                  </div>
               </div>
               <div class="card">
                  <a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/germany.png" class="img-responsive" alt="Card image cap" style="height: 100px;"></a>
                  <div class="card-body">
                     <center>
                        <a href="{{ url('front_flag/GERMANY') }}">
                           <h5 class="card-title">GERMANY</h5>
                        </a>
                     </center>
                  </div>
               </div>
            </div>
            <div class="card-deck flag_custom2">
               <div class="card">
                  <a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/UK_flag.png" class="img-responsive" alt="Card image cap" style="height: 100px;"></a>
                  <div class="card-body">
                     <center>
                        <a href="{{ url('front_flag/UK') }}">
                           <h5 class="card-title">UK</h5>
                        </a>
                     </center>
                  </div>
               </div>
               <div class="card">
                  <a href=""><img class="card-img-top avatar" src="{{ asset('public/assets/user') }}/images/austrlia.png" class="img-responsive" alt="Card image cap"></a>
                  <div class="card-body">
                     <center>
                        <a href="{{ url('front_flag/NEW%20ZEALAND') }}">
                           <h5 class="card-title">NEW ZEALAND</h5>
                        </a>
                     </center>
                  </div>
               </div>
            </div> -->
         </div>
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-5  kio">
            <div class="sidebar-item">
               <div class="make-me-sticky">
                  <div class="list-group">
                     <span class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                           <h5 class="mb-3">Talk to our Immigration Experts</h5>
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

<div class="blog_information">
   <div class="container">
      <h3 class="text-center mt-md-3 mt-lg-3 mt-xl-3"><em>Others Blog</em></h3>
      <div class="row">
         @foreach($others_blog as $data)
         <div class="col-md-4 blockmargin">
            <div class="card blog_card">
               <a href="{{ route('detailblog',$data['seo_url']) }}">
               <img src="{{ asset('public/assets/') }}/images/{{ $data['image'] }}" alt="{{ $data['alt'] }}" class="img-responsive" width="100%" height="200"></a>
               <div class="card-body">
                  <a href="{{ route('detailblog',$data['seo_url']) }}">
                     <h4 class="card-title">{{ substr($data->name, 0,  20) }}...</h4>
                  </a>
                  <p>{{$data->short_description}}</p>
                  <p class="card-text"><small class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('d M Y',strtotime($data['created_at']))}}</small></p>
                  <div class="post-like-holder">
                     <a target="_blank" href="#" class="md-post-like" data-post_id="6304" title="Like">
                     <span class="like-heart"><i class="fa fa-heart" aria-hidden="true"></i>
                     </span> 
                     </a>
                     <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('detailblog',$data['seo_url']) }}" class="md-post-like">
                     <span class="like-heart"><i class="fab fa-facebook-f fb" aria-hidden="true"></i>
                     </span> 
                     </a>
                     <a target="_blank" href="https://twitter.com/intent/tweet?text={{ route('detailblog',$data['seo_url']) }}" class="md-post-like">
                     <span class="like-heart"><i class="fab fa-twitter twitter" aria-hidden="true"></i>
                     </span> 
                     </a>
                     <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source={{ route('detailblog',$data['seo_url']) }}" class="md-post-like">
                     <span class="like-heart"><i class="fab fa-linkedin-in linkedin" aria-hidden="true"></i>
                     </span> 
                     </a>
                     <a target="_blank" href="whatsapp://send?text={{ route('detailblog',$data['seo_url']) }}" class="md-post-like">
                        <span class="like-heart"><i class="fab fa-whatsapp whatsapp" aria-hidden="true"></i>
                        </span> 
                     </a>
                  </div>
                  <button type="button" class="btn btn-danger">{{$data->button_title}}</button>
               </div>
               </a>
            </div>
         </div>
         @endforeach
         <span class="m-auto pb-3">
            {{$others_blog->links()}}
         </span>
      </div>
   </div>
</div>

<!-- <div class="gradient_bc">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
               <div class="card-block">
                  <center>
                     <h5 class="m-b-20"> Consult</h5>
                  </center>
                  <center class="mb-3"> <img src="{{ asset('public/assets') }}/images/r1.png" class="img-responsive" alt="Triple I Business Image"></center>
                  <p>Our experts have spent years helping candidates immigrating abroad. Request a free consultation to learn how we can help you immigrate.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
               <div class="card-block">
                  <center>
                     <h5 class="m-b-20">Apply</h5>
                  </center>
                  <center class="mb-3"><img src="{{ asset('public/assets') }}/images/r2.png" class="img-responsive" style="width:34%;" alt="Triple I Business Image"></center>
                  <p>You don't need to spend hours going through articles on the internet, learn about the steps to apply by consulting our immigration experts.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
               <div class="card-block">
                  <center>
                     <h5 class="m-b-20">Documentation</h5>
                  </center>
                  <center class="mb-3"><img src="{{ asset('public/assets') }}/images/r3.png" class="img-responsive" alt="Triple I Business Image"></center>
                  <p> It`s a vital part of the process and a small mistake could spoil entire efforts, Our experienced consultants can help you avoid such mistakes.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
               <div class="card-block">
                  <center>
                     <h5 class="m-b-20">Relationship</h5>
                  </center>
                  <center class="mb-3"><img src="{{ asset('public/assets') }}/images/r4.png" class="img-responsive" style="width:47%;" height="60" alt="Triple I Business Image"></center>
                  <p>Our relation doesn't end by getting you the visa, Our team is committed to helping you with every step of the immigration process.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<!-- ---------- -->
<!-- <div class="about_custom">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h2>Who We Are?</h2>
            <p>Triple I Business is one of the growing companies in Delhi NCR providing Consultancy services for Permanent Residency and Study visas in Canada, Australia, Germany, UK, and many other countries, we also offer Visa services for Tourist Visas and Visitor Visa.</p>
            <br/>
            <p>Established in 2014 with a vision to bring transparency to Visa seeker in India, We found that Visa Seekers in India is facing a lot of issues, there is a lack of information on the process, transparency is missing, mis-selling is on the all-time high and our purpose is to curb the issues in the immigration and visa process faced by Visa Seekers. We offer visa seekers an opportunity to connect verified Immigration consultants from Canada, Australia, Germany, and the UK and let the papers handled by the experts in Immigration Industry.</p>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h2>Vision</h2>
            <p>
               Triple I Business work with accredited immigration lawyers from Canada, Australia, Germany, and the UK, we offer visa seekers the opportunities to connect with verified Immigration consultants and let the papers handled by the experts in Immigration Industry.
            </p>
            <br/>
            <h2>Mission</h2>
            <p>Triple I Business is founded by young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers flexible payment options for the visa Seekers to process their application without putting a burden in their pockets young entrepreneurs who understand the value of customer relationship and Trust, Triple I offers .</p>
         </div>
      </div>
   </div>
</div> -->
<!-- <div class="container">
   <button><a href={{ url('contact/') }}><span  class="btn btn-primary">Apply Now</span></a></button>
   </div> -->
@endsection