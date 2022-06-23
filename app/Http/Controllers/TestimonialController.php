<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Session;
class TestimonialController extends Controller
{
   	public function index()
   	{
   		$data = Testimonial::get();
   		return view('admin.testimonial',compact('data'));
   	}
   	public function testimonialform()
   	{
   		return view('admin.addtestimonial');
   	}
   	public function addtestimonial(Request $data)
   	{
   		$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Testimonial;
               $name= $data->name;
               $alt = $data->alt;
               $designation = $data->designation;
               $description= $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->post = $designation;
                   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("testimonial/");
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
                   $obj= new Testimonial;
                   $name= $data->name;
                   $alt = $data->alt;
                   $designation= $data->designation;
                   $description= $data->description;
                   
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->post = $designation;
                   $obj->description = $description;
                 
                

                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("testimonial/");
                   }

           }
      
   	}

   	public function deletetestimonial($id,$image='Null')
   	{
   		$data = Testimonial::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("testimonial/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("testimonial/");
           }
       }
        
   	}
}
