<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Newzealand;

class NewzealandController extends Controller
{
    public function index()
    {
    	$data = Newzealand::get();
    	return view('admin.newzealand',compact('data'));
    }
    public function newzealand_form()
    {
    	return view('admin.addnewzealand');
    }
    public function addnewzealand(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Newzealand;
               $name= $data->name;
               $alt = $data->alt;
               $faq= $data->faq;
               $answer= $data->answer;
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
                       return redirect("newzealand/");
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
                   $obj= new Newzealand;
                   $name= $data->name;
                   $alt = $data->alt;
                   $faq= $data->faq;
                   $answer= $data->answer;
               	   $description = $data->description;
                   $obj->name = $name;
                   $obj->faq = $faq;
                   $obj->answer = $answer;
                   $obj->description = $description;
                   $obj->alt = $alt;

                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("newzealand/");
                   }

           }
    }
    public function deletenewzealand($id,$image)
    {
       $data = Newzealand::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("newzealand/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("newzealand/");
           }
       }
    }
    public function editnewzealand($id)
    {
    	$data = Newzealand::find($id);
        return view('admin.editnewzealand',compact('data'));
    }
    public function updatenewzealand(Request $data)
    {
        //   $dats=Newzealand::all();
        // foreach($dats as $d){
        //     $seo_url=strtolower(str_replace(" ","-",$d->name));
        //     $d1=Newzealand::find($d->id);
        //     $d1->seo_url=$seo_url;
        //     $d1->meta_title=$d->name;
        //     $d1->meta_keywords=$d->name;
        //     $d1->meta_description=$d->name;
        //     $d1->save();
        // }die;
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Newzealand;
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
                   $obj=Newzealand::find($id);
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
                       return redirect("newzealand/");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Newzealand;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $description = $data->description;
               
                   $obj=Newzealand::find($id);
                   $obj->name = $name;
                   $obj->description = $description;
                   $obj->alt = $alt;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                   if($obj->save())
                   {
                       return redirect("newzealand/");
                   }

           }
    }
}
