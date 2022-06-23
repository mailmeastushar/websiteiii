<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\StudyVisaTop;
use App\StudyVisaMain;
use App\Canada_submenu;
use App\Canada;
use App\Services;
use App\LatestUpdate;
use App\NewsLatter;
use App\Contact;
use App\Blog_comments;
use App\CrsPoint;
use App\Slider;
use App\Testimonial;
use App\Newzealand;
use App\Germany;
use App\Uk;
use App\flag_detail;
use App\about;
use App\Polycies;
use App\Assessment;
use App\Australia;
use App\Available;
use App\Eligibility;
use App\NewContact;
use Validator;

class FrontController extends Controller
{
    function getShani(){
      //  dd("gaurav");
        return view("front.new-data");
    }
    
    function getShaniPost(Request $request){
         $validator = Validator::make($request->all(), [
             "email"=>"required|unique:new_contacts,email",
             "mobile"=>"required|unique:new_contacts,mobile",
             "name"=>"required"
             ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('danger', 'Oops,it looks like you are already registered with us.Kindly wait,one of our consultants will call you soon!');;
        }
        NewContact::create($request->all());
        return redirect()->back()->with("success","Successfully send your request, Our Team Contact Soon");
    }
    
    function dynamic($seo1='har',$seo2='har',$seo3='har',$seo4='har',$seo5='har')
    {
        //dd($seo1);
        if($seo5!="har"){
            $seo_url=$seo5; 
            if($seo5=="benefits"){
                $seo_url="benefits";
            }
        }
        elseif($seo4!="har"){
            $seo_url=$seo4;  
            if($seo4=="benefits"){
                $seo_url="benefits";
            }
        }
        elseif($seo3!="har"){
            $seo_url=$seo3;   
            if($seo3=="benefits"){
                $seo_url="benefits";
            }
        }
        elseif($seo2!="har"){
            $seo_url=$seo2; 
            if($seo2=="benefits"){
                $seo_url="benefits";
            }
            if($seo2=="study"){
                $seo_url="study";
            }
        }
       
        if($seo1=="uk"){
        	$data = Uk::where("seo_url",$seo_url)->first();
        	if($data){
                $faq = Uk::where("uk_cat",$data->uk_cat)->get();
        	}else{
        	    if($seo_url!="benefits" && $seo_url!="study"){
        	        return abort(404);
        	    }
        	}
        }
        elseif($seo1=="germany"){
        	$data = Germany::where("seo_url",$seo_url)->first();
        	if($data){
                $faq = Germany::where("germany_cat",$data->germany_cat)->get();
        	}else{
        	    if($seo_url!="benefits" && $seo_url!="study"){
        	        return abort(404);
        	    }
        	}
        }
        elseif($seo1=="newzealand"){
        	$data = Newzealand::where("seo_url",$seo_url)->first();
        	if($data){
                $faq = Newzealand::get();
        	}else{
        	    if($seo_url!="benefits" && $seo_url!="study"){
        	        return abort(404);
        	    }
        	}
        }
        elseif($seo1=="australia"){
        	$data = Australia::where("seo_url",$seo_url)->first();
        	if($data){
                $faq = Australia::where("sub_menu",$data->id)->get();
        	}else{
        	    if($seo_url!="benefits" && $seo_url!="study"){
        	        return abort(404);
        	    }
        	}
        }
        elseif($seo1=="canada"){
        	$data = Canada::where("seo_url",$seo_url)->first();
        	if($data){
                $faq = Canada::where("sub_menu",$data->id)->get();
        	}else{
        	    if($seo_url!="benefits" && $seo_url!="study"){
        	        return abort(404);
        	    }
        	}
        }else{
            $seo_url=$seo1;
             $data = Services::where("seo_url",$seo1)->first();
             if($data){
                $faq = Services::where("service_categories",$data->service_categories)->get();
             }else{
                 if($seo1!="study"){
                    return abort(404);
                 }else{
                     $seo_url="study";
                 }
             }
        }
        if($seo_url=="benefits"){
            $data = flag_detail::where("country",$seo1)->first();
            if($data){
               // dd($data);
                $faq = flag_detail::where("country",$seo1)->get();    
            }else{
                return abort(404);
            }
        }
        if($seo_url=="study"){
            $cat=1;
            if($seo1=="uk"){
                $cat="uk_study_visa";
            }
            if($seo1=="canada"){
                $cat="canada_study_visa";
            }
            if($seo1=="study"){
                $cat="ourservices_study_visa";
            }
            $data = StudyVisaMain::where("country_study_visa",$cat)->first();
            if($data){
                
                $main = StudyVisaMain::get()->where("country_study_visa",$cat);
                $top = StudyVisaTop::where("country_study_visa",$cat)->first();
                return view('front.studyvisa',compact('top','main'));  
            }else{
               // return abort(404);
            }
        }
        
       
       
        if($data){
            
        }else{
            return abort(404);
        }
        //print_r($data);exit;
    	return view('front/details',compact('data','faq'));
        
    }
    public function index()
    {
    	$id = Canada_submenu::get();
        $slider = Slider::get();
        $testimonial = Testimonial::get();
        $blog = LatestUpdate::orderby('id','desc')->limit(15)->offset(0)->get();
    	return view('front.index',compact('id','slider','testimonial','blog'));
    }  

    public function detailblog($name)
    {
        $data = LatestUpdate::where("seo_url",$name)->first();
        $others_blog = LatestUpdate::where("seo_url","!=",$name)->orderby("created_at","desc")->paginate(6);
        $blog_comments = Blog_comments::where(["blog_id"=>$data->id,"is_visible"=>1])->orderby("created_at","desc")->get();
        //print_r($blog_comments);exit;
        if($data){
            return view('front.detalblog',compact('data','others_blog','blog_comments'));
        }
        return abort(404);
    }
    public function canada_studyvisa($cat)
    {
        $main = StudyVisaMain::get()->where("country_study_visa",$cat);
        $top = StudyVisaTop::where("country_study_visa",$cat)->first();
        return view('front.studyvisa',compact('top','main'));
    }
    
    // public function submenu_data($id)
    // {
    // 	$data = Canada::where("sub_menu",$id)->first();
    //     $faq = Canada::where("sub_menu",$id)->get();
    // 	return view('front/details',compact('data','faq'));
    // }

    // public function menu_data($id)
    // {
    //     $data = Canada::where("menu",$id)->first();
    //     $faq = Canada::where("menu",$id)->get();
    //     return view('front/details',compact('data','faq'));
    // }
    // public function submenu_australia($id)
    // {
    //     $data = Australia::where("sub_menu",$id)->first();
    //     $faq = Australia::where("sub_menu",$id)->get();
    //     return view('front/details',compact('data','faq'));
    // }
    // public function services($cat)
    // {
    //     $data = Services::where("service_categories",$cat)->first();
    //     $faq = Services::where("service_categories",$cat)->get();
    //     return view('front/services',compact('data','faq'));
    // }
    public function latest_update()
    {
        // $data = LatestUpdate::orderby('id','desc')->get();
        // return view('front/blog',compact('data'));
        $blogs = LatestUpdate::orderby('id','desc')->paginate(9);
        return view('front/blog',compact('blogs'));
    }
    public function newslatter(Request $data)
    {
        // Get the value from the form
        $email['email'] = $data->email;
        
        // Must not already exist in the `email` column of `users` table
        $rules = array('email' => 'unique:news_latters,email');
        
        $validator = Validator::make($email, $rules);
        
        if ($validator->fails()) {
            return redirect()->back()->with('danger', 'Oops,it looks like you are already registered with us.Kindly wait,one of our consultants will call you soon!');;
        }
        else 
        {
            $email = $data->email;
            $obj = new NewsLatter;
            $obj->email = $email;
    
            if($obj->save()) {
                if(!empty($email)){
                    $to = 'info@tripleibusiness.com';
                    $subject = 'New Subscriber: Triple I Business';
                    $headers  = "From: " . strip_tags($email) . "\r\n";
                    $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
                    //$headers .= "CC: info@tripleibusiness.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $message = '';
                    $message .= '<p>Hi,</p>';
                    $message .= '<p>New Subsriber is: '.$email.'</p>';
                    mail($to, $subject, $message, $headers);
                }
                #Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                return redirect()->back()->with('success', 'Thanks for subscribing. Welcome to Triple I Business Community.');
            } 
        }
        

    }
    public function get_newletter()
    {
        $data = NewsLatter::get();
        return view('admin.newsletter',compact('data'));
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function addcontact(Request $data)
    {
        $name = $data->name;
        $lname = $data->lname;
        $email = $data->email;
        $mobile = $data->mobile;
        $mail_message = $data->message;
        if(strlen($mail_message) <= 250){
            $obj = new Contact;
            $obj->name = $name;
            $obj->lname = $lname;
            $obj->email = $email;
            $obj->mobile = $mobile;
            $obj->message = $mail_message;
            if($obj->save()) {
                if(!empty($email)){
                    $to = 'info@tripleibusiness.com';
                    $subject = 'Contact-us Enquiry: Triple I Business';
                    $headers  = "From: " . strip_tags($email) . "\r\n";
                    $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
                    //$headers .= "CC: info@tripleibusiness.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $message = '';
                    $message .= '<p>Hi,</p>';
                    $message .= '<table border="1">';
                    $message .= '<tr><th>Name</th><td>:</td><td>'.$name.' '.$lname.'</td></tr>';
                    $message .= '<tr><th>Email</th><td>:</td><td>'.$email.'</td></tr>';
                    $message .= '<tr><th>Mobile</th><td>:</td><td>'.$mobile.'</td></tr>';
                    $message .= '<tr><th>Message</th><td>:</td><td>'.$mail_message.'</td></tr>';
                    $message .= '</table>';
                    mail($to, $subject, $message, $headers);
                }
            }
        }
        
        return redirect()->back()->with('success', 'Our Consultant has received your query. You will receive a call shortly. ');
        #echo "<script>  window.location.href='/'; alert('you have successfully submitted query');  </script>";
    
    }
    public function addblogcomment(Request $data)
    {
        $blog_id = $data->blog_id;
        $name = $data->blog_name;
        $email = $data->blog_email;
        $mobile = $data->blog_mobile;
        $message = $data->blog_comment;

        $obj = new Blog_comments;
        $obj->blog_id = $blog_id;
        $obj->name = $name;
        $obj->email = $email;
        $obj->mobile = $mobile;
        $obj->message = $message;

        if($obj->save()) {
            return redirect()->back()->with('success', 'Your comments is submit successfully.');
        }
    }
    public function get_contact()
    {
        $data = Contact::paginate(10);
        $data = Contact::orderby('id','desc')->paginate(10);
        return view('admin.contact',compact('data'));
    }
    public function assessment_form()
    {
        return view('front.assessment');
    }
    public function crs()
    {
        $data = CrsPoint::get();
        return view('front.crspoint',compact('data'));
    }
    public function flag($con)
    {
        $data = flag_detail::where("country",$con)->first();
        $faq = flag_detail::where("country",$con)->get();
        return view('front.details',compact('data','faq'));
    }
    // public function newzealand()
    // {
    //     $data = Newzealand::get()->first();
    //     $faq = Newzealand::get();
    //     return view('front.newzealand',compact('data','faq'));
    // }
    // public function germany($cat)
    // {
    //     $data = Germany::where("germany_cat",$cat)->first();
    //     $faq = Germany::where("germany_cat",$cat)->get();
    //     return view('front/details',compact('data','faq'));
    // }
    // public function uk($cat)
    // {
    //     $data = Uk::where("uk_cat",$cat)->first();
    //     $faq = Uk::where("uk_cat",$cat)->get();
    //     return view('front/details',compact('data','faq'));
    // }
    public function about()
    {
        $data = about::first();
        return view('front.about',compact('data'));
    }
    public function policy($pol)
    {
        $data = Polycies::where("policy_cat",$pol)->first();
        if($data){
          // dd($data);
            return view('front/policy',compact('data'));
        }else{
            return abort(404);
        }
    }
    public function addassisst(Request $data)
    {
        $title = $data->name_title;
        $name = $data->name;
        $email = $data->email;
        $mobile = $data->mobile;
        $country = $data->country;
        $city = $data->state;
        $dob = $data->dob;
        $qualification = $data->qualification;
        $profession = $data->profession;
        $exp = $data->exp;
        $file= $data->file('resume_docs');
        $ext = $file->getClientOriginalExtension();
        $resume_docs=rand().".".$ext;
        $path= public_path("/assets/images/");
        
        if(!$file->move($path,$resume_docs)) {
            $resume_docs="";
        }

        $obj = new Assessment;
        $obj->title = $title;
        $obj->name = $name;
        $obj->email = $email;
        $obj->mobile = $mobile;
        $obj->country = $country;
        $obj->dob = $dob;
        $obj->city = $city;
        $obj->qulification = $qualification;
        $obj->profession = $profession;
        $obj->exprience = $exp;
        $obj->resume = $resume_docs;

        if($obj->save()) {
            if(!empty($email)){
                $to = 'info@tripleibusiness.com';
                $subject = 'Assessment: Triple I Business';
                $headers  = "From: " . strip_tags($email) . "\r\n";
                $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
                //$headers .= "CC: info@tripleibusiness.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $message = '';
                $message .= '<p>Hi,</p>';
                $message .= '<table border="1">';
                $message .= '<tr><th>Name</th><td>:</td><td>'.$title.' '.$name.'</td></tr>';
                $message .= '<tr><th>Email</th><td>:</td><td>'.$email.'</td></tr>';
                $message .= '<tr><th>Mobile</th><td>:</td><td>'.$mobile.'</td></tr>';
                $message .= '<tr><th>Date Of Birth</th><td>:</td><td>'.$dob.'</td></tr>';
                $message .= '<tr><th>City</th><td>:</td><td>'.$city.'</td></tr>';
                $message .= '<tr><th>Country</th><td>:</td><td>'.$country.'</td></tr>';
                $message .= '<tr><th>Qualification</th><td>:</td><td>'.$qualification.'</td></tr>';
                $message .= '<tr><th>Profession</th><td>:</td><td>'.$profession.'</td></tr>';
                $message .= '<tr><th>Exprience</th><td>:</td><td>'.$exp.'</td></tr>';
                $message .= '</table>';
                mail($to, $subject, $message, $headers);
            }
            return redirect()->back()->with('success', 'We have received your query for the assessment. One of our consultants will reach out to you shortly.');
        }
    }
    public function showassisst()
    {
        // $data = Assessment::get();
        // return view('admin.assessment',compact('data'));
        $assessments = Assessment::orderby('created_at','desc')->paginate(15);
        return view('admin.assessment',compact('assessments'));
    }
    public function deleteassisst($id) {
        $data = Assessment::find($id);
        if($data->delete()) {
            if(!empty($data->resume) && file_exists(public_path("/assets/images/".$data->resume))) {
                unlink(public_path("/assets/images/".$data->resume));
            }
            
            return redirect("showassisst/");
        }
    }
    public function check($name)
    {
        $data = Eligibility::where("country_name",$name)->first();
        $meta['title'] = 'Check elegibility';
        $meta['description'] = 'Check elegibility';
        if(strtolower($name)=='australia'){
            $meta['title'] = 'Check your eligibility for Australian PR Visa';
            $meta['description'] = 'Settle with your family in Australia. Check the eligibility of the Federal and State programs according to your profile.';
        }else if(strtolower($name)=='uk'){
            $meta['title'] = 'Check your eligibility for the UK Residence Permit | Triple I Business';
            $meta['description'] = 'How long does it take to get a UK residence visa? Learn more about the steps in getting a UK Visa.';
        }else if(strtolower($name)=='germany'){
            $meta['title'] = 'Steps to check eligibility | Germany Blue Card & Jobseeker Visa.';
            $meta['description'] = 'Do you know if you need the German language to apply for Germany Blue Card? Also, check out the list of required documents for a job seeker visa.';
        }else if(strtolower($name)=='canada'){
            $meta['title'] = 'Complete steps to know your eligibility for Canada PR';
            $meta['description'] = 'Having work experience is not enough. It should match with NOC codes for skilled trade workers. Learn more about improving scores and other eligibility factors.';
        }
        return view('front/check',compact('data','meta'));
    }
    public function addcheck(Request $data)
    {
        $fname = $data->fname;
        $lname = $data->lname;
        $email = $data->email;
        $password = $data->password;
        $country =$data->country;
        $description = $data->description;

        $obj = new Available;
        $obj->fname = $fname;
        $obj->lname = $lname;
        $obj->email = $email;
        $obj->password = $password;
        $obj->country = $country;
        $obj->description = $description;

        if($obj->save())
        {
            return redirect()->back()->with('success', 'you have successfully submitted query !');
        }
    }
    public function success()
    {
        return view('front.success');
    }
}
