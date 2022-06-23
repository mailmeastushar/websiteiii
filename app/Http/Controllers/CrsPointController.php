<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CrsPoint;
use Session;
class CrsPointController extends Controller
{
    public function index()
    {
    	$data = CrsPoint::get();
    	return view('admin.crspoint',compact('data'));
    }
    public function crs_form()
    {
    	return view('admin.addcrspoint');
    }
    public function add_crs(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new CrsPoint;
               $name= $data->name;
               $alt = $data->alt;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->name = $name;
              	   $obj->description = $description;
                   $obj->image = $new_image;
                   $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("crs_point");
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
                   $obj= new CrsPoint;
                   $name= $data->name;
                   $alt = $data->alt;
               	   $description = $data->description;
                   $obj->name = $name;
                   $obj->description = $description;
                   $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                

                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("crs_point");
                   }

           }
    }
    public function deletecrs($id,$image='Null')
    {
       $data = CrsPoint::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("crs_point/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("crs_point/");
           }
       }
    }
    public function editcrs($id)
    {
    	$data = CrsPoint::find($id);
        return view('admin.editcrspoint',compact('data'));
    }
    public function updatecrs(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new CrsPoint;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=CrsPoint::find($id);
                   $obj->name = $name;
                   $obj->description = $description;
                   $obj->image = $new_image;
                   $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("crs_point");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new CrsPoint;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $description = $data->description;
               
               $obj=CrsPoint::find($id);
               $obj->name = $name;
               $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
               $obj->description = $description;
               if($obj->save())
               {
                   return redirect("crs_point");
               }

           }
    }
}
