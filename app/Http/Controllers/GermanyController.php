<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Germany;
use App\germany_category;
use Session;

class GermanyController extends Controller
{
    public function index()
    {
        $data = Germany::get();
        return view('admin.germany',compact('data'));
    }
    public function create()
    {
        $data = germany_category::get();
        return view('admin.addgermany',compact('data'));
    }
    public function addgermany(Request $data)
    {
              $file= $data->file('image');

               if(!empty($file))
                   {
                   $obj= new Germany;
                   $name= $data->name;
                   $alt = $data->alt;
                   $faq = $data->faq;
                   $answer = $data->answer;
                   $germany_cat = $data->germany_cat;
                   $description = $data->description;

                   $file= $data->file('image');
                   $ext = $file->getClientOriginalExtension();
                   $new_image=rand().".".$ext;
                   $path= public_path("/assets/images/");
                   
                   if($file->move($path,$new_image))
                   {
                       $obj->name = $name;
                       $obj->faq = $faq;
                       $obj->answer = $answer;
                       $obj->germany_cat = $germany_cat;
                       $obj->description =   $description;
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
                           return redirect("germany/");
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
                       $obj= new Germany;
                       $name = $data->name;
                       $alt = $data->alt;
                       $germany_cat = $data->germany_cat;
                       $description = $data->description;
                       $faq = $data->faq;
                       $answer = $data->answer;

                       $obj->faq = $faq;
                       $obj->answer = $answer;
                       $obj->name = $name;
                       $obj->alt = $alt;
                       $obj->germany_cat = $germany_cat;
                       $obj->description =   $description;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                    

                       if($obj->save())
                       {
                            #echo "data inserted";
                           return redirect("germany/");
                       }

               }      
    }
    public function edit($id)
    {
        $data = Germany::find($id);
        return view('admin.editgermany',compact('data'));
    }

    public function update(Request $data)
    {
        //  $dats=Germany::all();
        // foreach($dats as $d){
        //     $seo_url=strtolower(str_replace(" ","-",$d->name));
        //     $d1=Germany::find($d->id);
        //     $d1->seo_url=$seo_url;
        //     $d1->meta_title=$d->name;
        //     $d1->meta_keywords=$d->name;
        //     $d1->meta_description=$d->name;
        //     $d1->save();
        // }die;
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Germany;
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
                   $obj=Germany::find($id);
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
                       return redirect("germany/");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Germany;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $description = $data->description;

               $obj=Germany::find($id);

               $obj->name = $name;
               $obj->alt = $alt;
               $obj->description = $data->description;

                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
               if($obj->save())
               {
                   return redirect("germany/");
               }

           }
    }
    public function destroy($id,$image='Null')
    {
       $data = Germany::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("germany/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("germany/");
           }
       }
       
    
    }
}
