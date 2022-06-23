<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Polycies;
use Session;
use App\Polycy_categories;

class PolyciesController extends Controller
{
    public function index()
    {
        $data = Polycies::get();
        return view('admin.policies',compact('data'));
    }
    public function create()
    {
        $data = Polycy_categories::get();
        return view('admin.addpolicy',compact('data'));
    }
    public function addpolicy(Request $data)
    {

              $file= $data->file('image');

               if(!empty($file))
                   {
                   $obj= new Polycies;

                   $name= $data->name;
                   $policy_cat = $data->policy_cat;
                   $description = $data->description;
                   

                   $file= $data->file('image');
                   $ext = $file->getClientOriginalExtension();
                   $new_image=rand().".".$ext;
                   $path= public_path("/assets/images/");
                   
                   if($file->move($path,$new_image))
                   {
                       $obj->name = $name;
                       $obj->policy_cat = $policy_cat;
                       $obj->description =   $description;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                       if($obj->save())
                       {
                           #echo "data inserted";
                           Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                           return redirect("policies/");
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
                       $obj= new Polycies;
                       $name = $data->name;
                       $policy_cat = $data->policy_cat;
                       $description = $data->description;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                       $obj->name = $name;
                       $obj->policy_cat = $policy_cat;
                       $obj->description =   $description;
                    

                       if($obj->save())
                       {
                            #echo "data inserted";
                           return redirect("policies/");
                       }

               }
         
    }
    public function edit($id)
    {
        $data = Polycies::find($id);
        return view('admin.editpolicy',compact('data'));
    }

    public function update(Request $data)
    {
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Polycies;
               $id= $data->id;
               $name= $data->name;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=Polycies::find($id);
                   $obj->name = $name;
                   $obj->description = $description;
                   $obj->image = $new_image;
                   $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("policies/");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Polycies;
               $id= $data->id;
               $name= $data->name;
               $description = $data->description;

               $obj=Polycies::find($id);

               $obj->name = $name;
               $obj->description = $data->description;
               $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

               if($obj->save())
               {
                   return redirect("policies/");
               }

           }
    }
    public function destroy($id,$image='Null')
    {
       $data = Polycies::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("policies/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("policies/");
           }
       }
       
    
    }
}
