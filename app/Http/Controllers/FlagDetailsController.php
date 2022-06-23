<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FlagDetails;
use App\Country_flags;
use Session;

class FlagDetailsController extends Controller
{
    public function index()
    {
    	$data = FlagDetails::get();
    	return view('admin.flagedetails',compact('data'));
    }
    public function flag_form()
    {	
    	$data = Country_flags::get();
    	return view('admin.addflag',compact('data'));
    }
    public function addflag(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new FlagDetails;
               $country = $data->country;
               $alt = $data->alt;
               $name= $data->name;
               $faq= $data->faq;
               $answer= $data->answer;
               $description= $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->faq = $faq;
                   $obj->answer = $answer;
                   $obj->country = $country;
                   $obj->description = $description;
                   $obj->image = $new_image;
                   
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("admin_flag/");
                   }

                   }
               else
               {
                    #echo "invalid data";
                   Session::flash('message', 'Invalid data');
               }
           }
           else
           {
                   $obj= new FlagDetails;
                   $name= $data->name;
                   $alt = $data->alt;
                   $faq = $data->faq;
                   $answer = $data->answer;
                   $country = $data->country;
                   $description= $data->description;
                   
                   $obj->name = $name;
                   $obj->faq = $faq;
                   $obj->answer = $answer;
                   $obj->country = $country;
                   $obj->alt = $alt;
                   $obj->description = $description;
                 
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("admin_flag/");
                   }

           }
    }
    public function deleteflag($id,$image='Null')
    {
    	   $data = FlagDetails::find($id);
	       if($image=='Null')
	       {
	          if($data->delete())
	           {
	              return redirect("admin_flag/");
	           }
	       }
	       else
	       {
	          if($data->delete())
	           {
	              unlink('public/assets/images/'.$image);
	              return redirect("admin_flag/");
	           }
	       }
    }
    public function editflag($id)
    {
    	$data = FlagDetails::find($id);
        return view('admin.editflag',compact('data'));
    }
    public function updateflage(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new FlagDetails;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $faq = $data->faq;
               $answer = $data->answer;
               $description= $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=FlagDetails::find($id);
                   $obj->name = $name;
                   
                   $obj->image = $new_image;
                   $obj->faq = $faq;
                   $obj->alt = $alt;
                   $obj->answer = $answer;
                   $obj->description = $description;
                 
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("admin_flag/");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new FlagDetails;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $faq = $data->faq;
               $answer = $data->answer;
               $description= $data->description;
               $obj=FlagDetails::find($id);
               $obj->name = $name;
               $obj->faq = $faq;
               $obj->answer = $answer;
               $obj->description = $description;
                $obj->alt = $alt;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                   if($obj->save())
                   {
                       return redirect("admin_flag/");
                   }

           }
    }
}
