<!DOCTYPE html>
<html>
   <head>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-T3R6NM4');
      </script>
      <!-- End Google Tag Manager -->
      <title>@yield('meta_title')</title>
      <link rel="shortcu icon" type="image/jpeg" href="{{ asset('public/assets/user') }}/images/favicon.jpeg">
      <meta charset="utf-8">
      <meta   name="keywords" content="@yield('meta_keywords')" >
      <meta   name="description" content="@yield('meta_description')" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
      <!-- ----font-awsome--- -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- ----font-awsome--- -->
      <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      
      <!-- ------ -->
      <link href="{{ asset('public/toastr/toastr.css') }}" rel="stylesheet" />
      <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">-->
      <!--<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">-->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/user') }}/css/style.css?v=3.45">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/user') }}/css/new-style.css?v=4.856555955">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/user') }}/css/inner-page.css?v=30.023206552">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/user') }}/css/device.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/user') }}/css/media.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.css">
      <!--Start of Tawk.to Script-->
      {{-- <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/5fe9d1e0df060f156a91166f/1eqklnm66';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
      </script> --}}
      <!--End of Tawk.to Script-->
      <meta name="google-site-verification" content="90BHcLjqMLPkSYwS74tYXPNuGLDzzGg9aAeqW0_erS4" />
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-JLJ8SZ9NN1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-JLJ8SZ9NN1');
      </script>
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3R6NM4"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div class="top-header-bar">
         <div class="container-fluid">
            <div class="row mobile-no ">
            <div class="col-sm-6">
               <a href="tel:+011 46520736"><i class="fa fa-phone" aria-hidden="true" style="color: #3f2ca9;font-weight: bold"></i> +011 46520736</a> 
            </div>
            <div class="col-sm-6">
               
               <a href="https://api.whatsapp.com/send?phone=918595744633" target="blank"><i class="fa fa-whatsapp" aria-hidden="true" style="color: #12BB1A;font-weight: bold"></i> +91 8595744633</a> 
            </div>
         </div>
            <div class="row">
               <div class="col-md-6">
                <ul>
                    
                    <li>
                        <a href="tel:+011 46520736"><span><i class="fas fa-phone-alt"> </i></span>  </span>+011 46520736</a>
                    </li>
                    <li>
                        <a href="mailto:info@tripleibusiness.com"><span><i class="fas fa-envelope"> </i></span>  </span>info@tripleibusiness.com</a>
                    </li>
                </ul>
               </div>
               <div class="col-md-6">
                   <ul class="right-head-info">
                       <li>
                           <a href="{{ url('assessment') }}">Assessment Form <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                       </li>
                       <li>
                           <a href="{{ url('crs/') }}">CRS Point Calculator <span class="material-icons"><i class="fas fa-long-arrow-alt-right"></i></span></a>
                       </li>
                   </ul>
               </div>
            </div>
         </div>
      </div>

     <!--  <div class="container-fluid desktop_view top-logo-show">
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-2 logo_custom">
               <a href="{{ url('/') }}"><img src="{{ asset('public/assets/user') }}/images/newlogo.png" alt="logo" class="img-responsive"></a>
            </div>
            <div class="col-xl-4  col-lg-4 col-sm-2 logo_2">
               <img src="{{ asset('public/assets') }}/images/Logo1_new.jpeg" class="img-responsive" alt="logo">
            </div>
            <div class="col-xl-4  col-lg-4 col-sm-2 logo_3">
               <img src="{{ asset('public/assets') }}/images/logo _2.jpeg" class="img-responsive" alt="logo">
            </div>            
         </div>
      </div> -->

      <div class="container-fluid mobile_view">
         
         <div class="row">
            <div class="col-2">
                <a href='#mob-menu' class="mobilemenuIcon"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
            <div class="col-4">
               <a href="{{ url('/') }}"><img src="{{ asset('public/assets/user') }}/images/newlogo.png" alt="logo" class="img-responsive">
               </a>
            </div>
            <div class="col-3 ">
               <img src="{{ asset('public/assets') }}/images/Logo1_new.jpeg" class="img-responsive" alt="logo">
            </div>
            <div class="col-3">
               <img src="{{ asset('public/assets') }}/images/logo _2.jpeg" class="img-responsive" alt="logo">
            </div>
            <!-- <div class="col-6">
               <button type="button" class="btn"style="color: #fff;"><a href="{{ url('crs/') }}">CRS Point Calculator</a>
               </button>
            </div>
            <div class="col-6">
               <button type="button" class="btn"> <a href="{{ url('assessment') }}">Assessment Form</a> </button>
            </div> -->
         </div>
      </div>
      </div>
      <!--------navbar---------->
      <div id="desk-nav" class="nav_bar sticky-top ">
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-2 col-lg-2 col-sm-2 logo_custom">
               <a href="{{ url('/') }}"><img src="{{ asset('public/assets/user') }}/images/foot-new2-without-line.png" alt="logo" class="img-responsive"><span class="Intensity-Intention-Impact">Intensity Intention Impact</span> </a>
            </div>
               <div class="col-lg-10">
                  
            
               

               <nav  class="navbar navbar-expand-lg navbar-dark ">
                  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                  <span class="navbar-toggler-icon"></span>
                  </button> -->

                  <div class="collapse navbar-collapse" id="main_nav">
                     <ul class="navbar-nav">
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}"> HOME </a> </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown">OUR SERVICES</a>
                           <ul class="dropdown-menu fade-up-custom fade-up ">
                              <li><a class="dropdown-item" href="{{ url('visa/study') }}">Study Visa </a></li>
                              @foreach(\App\Services::whereNotNull("seo_url")->where("seo_url","<>","")->orderBy("id","asc")->get() as $menu)
                              <li><a class="dropdown-item" href="{{ url('visa/'.$menu->seo_url) }}">{{ $menu->title }} </a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">CANADA </a>
                           <ul class="dropdown-menu fade-up-custom">
                              <li>
                                 <a class="dropdown-item" href="{{ url('visa/permanent-residence') }}">Permanent Residence &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Canada::where("menu","1")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/canada/pr/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="{{ url('visa/canada/pr/provincial-nominee-program-(PNP)') }}">Provincial Nominee Program (PNP)  &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Canada::where("menu","8")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/canada/pr/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              @php  $add=\App\Canada::where("menu","2")->whereNotNull("seo_url")->where("seo_url","<>","")->first();@endphp
                              @if($add)
                              <li><a class="dropdown-item" href="{{ url('visa/canada/pr/'.$add->seo_url) }}">{{ $add->name }}</a></li>
                              @endif
                              <li>
                                 <a class="dropdown-item" href="#">Quebec Immigration   &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Canada::where("menu","3")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/canada/pr/quebec/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#"> Work permit &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Canada::where("menu","4")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/canada/work/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#"> Business / Investor &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Canada::where("menu","5")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/canada/investor/'.$menu->seo_url) }}">{{ $menu->name }} </a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li><a class="dropdown-item" href="{{ url('visa/canada/study') }}">Study Visa</a></li>
                              @php  $add=\App\Canada::where("menu","7")->whereNotNull("seo_url")->where("seo_url","<>","")->first();@endphp
                              @if($add)
                              <li><a class="dropdown-item" href="{{ url('visa/canada/'.$add->seo_url) }}">{{ $add->name }}</a></li>
                              <li><a class="dropdown-item" href="{{url('visa/canada/IELTS')}}">IELTS</a></li>
                              <ul class="submenu dropdown-menu">
                                 @foreach(\App\Canada::where("menu","9")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                 <li><a class="dropdown-item" href="{{ url('visa/canada/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                 @endforeach
                              </ul>
                              </li>
                              @endif
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">AUSTRALIA </a>
                           <ul class="dropdown-menu fade-up-custom">
                              <li>
                                 <a class="dropdown-item" href="#"> Skilled Visa &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Australia::where("menu","1")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#"> Visitor Visa &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Australia::where("menu","2")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#"> Work Visa &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Australia::where("menu","3")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#">Student Visa &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Australia::where("menu","4")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a class="dropdown-item" href="#">Permanent Residency  &raquo</a>
                                 <ul class="submenu dropdown-menu">
                                    @foreach(\App\Australia::where("menu","5")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a class="dropdown-item" href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        @php  $add=\App\Newzealand::whereNotNull("seo_url")->where("seo_url","<>","")->first(); @endphp
                        @if($add)
                        <li class="nav-item"> <a class="nav-link" href="{{ url('visa/newzealand/'.$add->seo_url) }}"> {{$add->name}} </a></li>
                        @endif
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> GERMANY </a>
                           <ul class="dropdown-menu fade-up-custom">
                              @foreach(\App\Germany::whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                              <li><a class="dropdown-item" href="{{ url('visa/germany/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> UK </a>
                           <ul class="dropdown-menu fade-up-custom">
                              <li><a class="dropdown-item" href="{{ url('visa/uk/study') }}">Study Visa </a></li>
                              @foreach(\App\Uk::whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                              <li><a class="dropdown-item" href="{{ url('visa/uk/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('blog/') }}"> LATEST UPDATES </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('harshit-rai') }}"> CONTACT US </a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('payform/') }}"> PAY NOW </a></li>
                     </ul>
                  </div>
               </nav>
            </div>
            </div>
         </div>
      </div>
       <div class="mobile_menu">
                <nav id="mob-menu" class="  ">
                 

                  
                     <ul  >
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}"> HOME </a> </li>
                        <li >
                           <a    href="#"  >OUR SERVICES</a>
                           <ul  >
                              <li><a  href="{{ url('visa/study') }}">Study Visa </a></li>
                              @foreach(\App\Services::whereNotNull("seo_url")->where("seo_url","<>","")->orderBy("id","asc")->get() as $menu)
                              <li><a  href="{{ url('visa/'.$menu->seo_url) }}">{{ $menu->title }} </a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li  >
                           <a   href="#"  >CANADA </a>
                           <ul  >
                              <li>
                                 <a   href="#">Permanent Residence &raquo</a>
                                 <ul  >
                                    @foreach(\App\Canada::where("menu","1")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a href="{{ url('visa/canada/pr/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a   href="{{ url('visa/canada/pr/ProvincialNomineeProgram(PNP)') }}">Provincial Nominee Program (PNP)  &raquo</a>
                                 <ul  >
                                    @foreach(\App\Canada::where("menu","8")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/canada/pr/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              @php  $add=\App\Canada::where("menu","2")->whereNotNull("seo_url")->where("seo_url","<>","")->first();@endphp
                              @if($add)
                              <li><a   href="{{ url('visa/canada/pr/'.$add->seo_url) }}">{{ $add->name }}</a></li>
                              @endif
                              <li>
                                 <a   href="#">Quebec Immigration   &raquo</a>
                                 <ul  >
                                    @foreach(\App\Canada::where("menu","3")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/canada/pr/quebec/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a   href="#"> Work permit &raquo</a>
                                 <ul  >
                                    @foreach(\App\Canada::where("menu","4")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/canada/work/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a   href="#"> Business / Investor &raquo</a>
                                 <ul  >
                                    @foreach(\App\Canada::where("menu","5")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/canada/investor/'.$menu->seo_url) }}">{{ $menu->name }} </a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li><a   href="{{ url('visa/canada/study') }}">Study Visa</a></li>
                              @php  $add=\App\Canada::where("menu","7")->whereNotNull("seo_url")->where("seo_url","<>","")->first();@endphp
                              @if($add)
                              <li><a   href="{{ url('visa/canada/'.$add->seo_url) }}">{{ $add->name }}</a></li>
                              <li><a   href="{{url('visa/canada/IELTS')}}">IELTS</a></li>
                               <ul  >
                                 @foreach(\App\Canada::where("menu","9")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                 <li><a   href="{{ url('visa/canada/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                 @endforeach
                              </ul>
                              </li>
                              @endif
                           </ul>
                        </li>
                        <li >
                           <a   href="#" >AUSTRALIA </a>
                           <ul  >
                              <li>
                                 <a   href="#"> Skilled Visa &raquo</a>
                                 <ul  >
                                    @foreach(\App\Australia::where("menu","1")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a   href="#"> Visitor Visa &raquo</a>
                                 <ul  >
                                    @foreach(\App\Australia::where("menu","2")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a  href="#"> Work Visa &raquo</a>
                                 <ul >
                                    @foreach(\App\Australia::where("menu","3")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a   href="#">Student Visa &raquo</a>
                                 <ul  >
                                    @foreach(\App\Australia::where("menu","4")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li>
                                 <a   href="#">Permanent Residency  &raquo</a>
                                 <ul  >
                                    @foreach(\App\Australia::where("menu","5")->whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                                    <li><a   href="{{ url('visa/australia/skilled/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        @php  $add=\App\Newzealand::whereNotNull("seo_url")->where("seo_url","<>","")->first(); @endphp
                        @if($add)
                        <li  > <a   href="{{ url('visa/newzealand/'.$add->seo_url) }}"> {{$add->name}} </a></li>
                        @endif
                        <li  >
                           <a   href="#"  > GERMANY </a>
                           <ul  >
                              @foreach(\App\Germany::whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                              <li><a  href="{{ url('visa/germany/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li  >
                           <a   href="#"  > UK </a>
                           <ul  >
                              <li><a   href="{{ url('visa/uk/study') }}">Study Visa </a></li>
                              @foreach(\App\Uk::whereNotNull("seo_url")->where("seo_url","<>","")->get() as $menu)
                              <li><a   href="{{ url('visa/uk/'.$menu->seo_url) }}">{{ $menu->name }}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li  > <a   href="{{ url('blog/') }}"> LATEST UPDATES </a></li>
                        <li > <a class="nav-link" href="{{ route('harshit-rai') }}"> CONTACT US </a></li>
                        <li  > <a class="nav-link" href="{{ url('payform/') }}"> PAY NOW </a></li>
                     </ul>
                  </div>
               </nav>
             </div>
      <!-- navbar-collapse.// -->