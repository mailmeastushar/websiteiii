<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uk;
use App\uk_category;
use Session;

class UkController extends Controller
{
    public function index()
    {
        $data = Uk::get();
        return view('admin.uk',compact('data'));
    }
    public function create()
    {
        $data = uk_category::get();
        return view('admin.adduk',compact('data'));
    }
    public function adduk(Request $data)
    {
              $file= $data->file('image');

               if(!empty($file))
                   {
                   $obj= new Uk;
                   $name= $data->name;
                   $alt = $data->alt;
                   $faq = $data->faq;
                   $answer = $data->answer;
                   $uk_cat = $data->uk_cat;
                   $description = $data->description;
            
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
                       $obj->uk_cat = $uk_cat;
                       $obj->description =   $description;
                       $obj->image = $new_image;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                       

                       if($obj->save())
                       {
                           #echo "data inserted";
                           Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                           return redirect("uk/");
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
                       $obj= new Uk;
                       $name = $data->name;
                       $alt = $data->alt;
                       $uk_cat = $data->uk_cat;
                       $description = $data->description;
                       $faq = $data->faq;
                       $answer = $data->answer;

                       $obj->faq = $faq;
                       $obj->answer = $answer;
                       $obj->name = $name;
                       $obj->uk_cat = $uk_cat;
                       $obj->description =   $description;
                        $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                       if($obj->save())
                       {
                            #echo "data inserted";
                           return redirect("uk/");
                       }

               }      
    }
    public function edit($id)
    {
        $data = Uk::find($id);
        return view('admin.edituk',compact('data'));
    }

    public function update(Request $data)
    {
        //   $dats=Uk::all();
        // foreach($dats as $d){
        //     $seo_url=strtolower(str_replace(" ","-",$d->name));
        //     $d1=Uk::find($d->id);
        //     $d1->seo_url=$seo_url;
        //     $d1->meta_title=$d->name;
        //     $d1->meta_keywords=$d->name;
        //     $d1->meta_description=$d->name;
        //     $d1->save();
        // }die;
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Uk;
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
                   $obj=Uk::find($id);
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
                       return redirect("uk/");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Uk;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $description = $data->description;

               $obj=Uk::find($id);

               $obj->name = $name;
               $obj->description = $data->description;
                $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
               if($obj->save())
               {
                   return redirect("uk/");
               }

           }
    }
    public function destroy($id,$image='Null')
    {
       $data = Uk::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("uk/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("uk/");
           }
       }
       
    
    }
}
