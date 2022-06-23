<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\check_categories;
use App\Eligibility;
use Session;
class CheckCategoriesController extends Controller
{
    public function crs_form()
    {
        return view('admin.addcrspoint');
    }
    public function getcheck()
    {   
        $data = Eligibility::get();
        return view('admin.check',compact('data'));
    }
    public function addeligibility(Request $data)
    {
           $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Eligibility;
               $name= $data->country_name;
               $alt = $data->alt;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->country_name = $name;
                   $obj->alt = $alt;
                   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("showcheck");
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
                   $obj= new Eligibility;
                   $name= $data->name;
                   $alt = $data->alt;
                   $description = $data->description;
                   $obj->country_name = $name;
                   $obj->alt = $alt;
                   $obj->description = $description;
                

                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("showcheck");
                   }

           }
    }
    public function deletecheck($id,$image='Null')
    {
       $data = Eligibility::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("showcheck/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("showcheck/");
           }
       }
    }
    public function editcheck($id)
    {
        $data = Eligibility::find($id);
        return view('admin.editeligiblity',compact('data'));
    }
    public function updateligibility(Request $data)
    {
        $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Eligibility;
               $id= $data->id;
               $alt = $data->alt;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=Eligibility::find($id);
                   $obj->alt = $alt;
                   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("showcheck");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Eligibility;
               $id= $data->id;
               $alt = $data->alt;
               $description = $data->description;
               
               $obj=Eligibility::find($id);
               $obj->alt = $alt;
               $obj->description = $description;
               if($obj->save())
               {
                   return redirect("showcheck");
               }

           }
    }
    public function check_form()
    {
    	$data = check_categories::get();
    	return view('admin.addeligibility',compact('data'));
    }
}
