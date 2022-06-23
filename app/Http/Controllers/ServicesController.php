<?php

namespace App\Http\Controllers;

use App\Services;
use Session;
use App\service_categories;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = Services::get();
        return view('admin.services',compact('data'));
    }
    public function create()
    {
        $data = service_categories::get();
        return view('admin.addservice',compact('data'));
    }
    public function store(Request $data)
    {

              $file= $data->file('image');

               if(!empty($file))
                   {
                   $obj= new Services;

                   $name= $data->name;
                   $alt = $data->alt;
                   $faq= $data->faq;
                   $answer= $data->answer;
                   $service_name = $data->service_name;
                   $description = $data->description;

                   $file= $data->file('image');
                   $ext = $file->getClientOriginalExtension();
                   $new_image=rand().".".$ext;
                   $path= public_path("/assets/images/");
                   
                   if($file->move($path,$new_image))
                   {
                       $obj->title = $name;
                       $obj->alt = $alt;
                       $obj->faq = $faq;
                       $obj->answer = $answer;
                       $obj->service_categories = $service_name;
                       $obj->description =   $description;
                       $obj->image = $new_image;

                       if($obj->save())
                       {
                           #echo "data inserted";
                           Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                           return redirect("services");
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
                       $obj= new Services;
                       $name = $data->name;
                       $alt = $data->alt;
                       $faq= $data->faq;
                       $answer= $data->answer;
                       $service_name = $data->service_name;
                       $description = $data->description;

                       $obj->title = $name;
                       $obj->faq = $faq;
                       $obj->alt = $alt;
                       $obj->answer = $answer;
                       $obj->service_categories = $service_name;
                       $obj->description =   $description;
                    

                       if($obj->save())
                       {
                            #echo "data inserted";
                           return redirect("services");
                       }

               }
         
    }
    public function edit($id)
    {
        $data = Services::find($id);
        return view('admin.editservices',compact('data'));
    }

    public function update(Request $data)
    {
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Services;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=Services::find($id);
                   $obj->title = $name;
                   $obj->description = $description;
                   $obj->image = $new_image;
                   $obj->seo_url = $data->seo_url;
                   $obj->alt = $alt;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("services");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Services;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $description = $data->description;

               $obj=Services::find($id);

               $obj->title = $name;
               $obj->alt = $alt;
               $obj->description = $data->description;
               $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

               if($obj->save())
               {
                   return redirect("services");
               }

           }
    }
    public function destroy($id,$image='Null')
    {
       $data = Services::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("services");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("services");
           }
       }
       
    
    }
}
