@extends('front/master')
@section("meta_title","Check eligibility to Apply PR Visa, Study Visa, & Work Visa")
@section("meta_keywords","Assessment Form")
@section("meta_description","Triple I Business offers a free assessment of your profile to apply for a PR visa, Study Visa, Job Seeker visa, Work visa in Canada, Australia, NZ, Germany.")
@section('container')
<div class="bc_image" style="background-image:url('{{asset('public/assets/user/images/world-map-146505_1280.png')}}'); height:800px;width:100%; background-repeat:no-repeat;background-size: cover; margin:0 !important;">
   <div class="container">
      <!-- <img src="{{ asset('public/assets/user') }}/images/world-map-146505_1280.png" style="width: 100%;" class="img-responsive" alt="Triple I Business Image"> -->
      <div class="form_custom">
         <div class="container">
            <h2 class="text-center" style="font-weight: bold;color: #0b4777;">   </h2>
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-lg-6 pb-5 ass-form">
                  <form action="{{ url('addassisst/') }}" method="post" id="assessment_form" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                           <div class="bg-info text-white text-center py-2">
                              <h3><i class="fa fa-envelope"></i> Submit Your Details</h3>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <div class="row">
                              <div class="col-6 col-md-6 col-sm-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fas fa-address-card text-info"></i></div>
                                       </div>
                                       <select class="form-control select-title" id="name_title" name="name_title">
                                          <option value="">Select Title</option>
                                          <option value="Mr">Mr</option>
                                          <option value="Mrs">Mrs</option>
                                          <option value="Smt">Smt</option>
                                       </select>
                                       <span id="name_title_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6 col-md-6 col-sm-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="as_name" name="name" placeholder="Full Name" required>
                                       <span id="as_name_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                       </div>
                                       <input type="text" maxlength="20" minlength="10" class="form-control" id="as_mobile" name="mobile" placeholder="Contact No." required>
                                       <span id="as_mobile_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                       </div>
                                       <input type="email" class="form-control" id="as_email" name="email" placeholder="Contact E-mail" required>
                                       <span id="as_email_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-6 col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-globe text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" required>
                                       <span id="country_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6 col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-location-arrow text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" required>
                                       <span id="state_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
                                       </div>
                                       <input type="date" class="form-control" id="dob" name="dob" placeholder="D.O.B" required>
                                       <span id="dob_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-graduation-cap text-info"></i></div>
                                       </div>
                                       <select class="form-control select-title" id="qualification" name="qualification">
                                          <option value="">Highest Qualification</option>
                                          <option value="Did Not Attend School">Did Not Attend School</option>
                                          <option value="Less than Secondary">Less than Secondary</option>
                                          <option value="Higher Secondary">Higher Secondary</option>
                                          <option value="Diploma">Diploma</option>
                                          <option value="Under Graduate">Under Graduate</option>
                                          <option value="Graduate">Graduate</option>
                                          <option value="Masters">Master`s</option>
                                          <option value="PhD">PhD</option>
                                       </select>
                                       <span id="qualification_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-6 col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-id-badge text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="profession" onpaste="return false;" autocomplete="off" name="profession" placeholder="Profession" required>
                                       <span id="profession_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-6 col-md-6">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-file text-info"></i></div>
                                       </div>
                                       <input type="text" class="form-control" id="exp" name="exp" placeholder="Year Of Experience" required>
                                       <span id="exp_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                       </div>
                                       <input type="file" class="form-control" id="resume_docs" name="resume_docs" placeholder="Upload your Resume" required>
                                       <span id="resume_docs_error_msg" style="display: block;width:100%;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="text-center">
                              <input type="button" id="assessment_form_btn" name="assessment_form_btn" value="Click Here" class="btn btn-info btn-block rounded-0 py-2">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop