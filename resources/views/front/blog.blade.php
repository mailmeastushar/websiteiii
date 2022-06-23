@extends('front.master')
@section("meta_title","Blogs")
@section("meta_keywords","Blogs")
@section("meta_description","Blogs")
@section('container')
<div class="blog_banner" style="background-image:url('{{asset('public/assets/user/images/2.png')}}');">
   <div class="container-fluid">
      <div class="row">
         <!-- <img  src="{{ asset('public/assets/user') }}/images/2.png" alt="Card image cap" class="img-responsive"> -->
         <div class="blog_heading">
            <!-- <center>
               <h6 class="animated fadeInLeft slower ">Triple I Business Services </h6>
            </center>
            <center>
               <h2 class="animated zoomIn delay-1s slow">Latest News and Updates</h2>
            </center> -->
         </div>
      </div>
   </div>
</div>
<div class="blog_information">
   <div class="container">
      <div class="row">
         @foreach($blogs as $data)
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
                        <!-- <span class="like-count">0
                           </span> -->
                     </a>
                  </div>
                  {{-- <button type="button" class="btn btn-danger">Immigration Services</button> --}}
                  <button type="button" class="btn btn-danger">{{$data->button_title}}</button>
               </div>
               </a>
            </div>
         </div>
         @endforeach
         <div class="col-md-12" style="margin:50px 0 50px 0;">
            {{ $blogs->links() }}
         </div>
         {{-- <div class="col-md-12" style="margin:50px 0 50px 0;">
            <nav aria-label="Page navigation example">
               <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                     <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                     <a class="page-link" href="#">Next</a>
                  </li>
               </ul>
            </nav>
         </div> --}}
      </div>
   </div>
</div>
@endsection