<?php

namespace App\Http\Controllers;

use App\Canada;
use App\Canada_menu;
use App\Canada_submenu;
use Session;
use Illuminate\Http\Request;

class CanadaController extends Controller
{
    public function index()
    {
        $data = Canada::get();
        return view('admin.canada',compact('data'));
    }
    function canada_submenupost(Request $request)
    {
        $s="<option value=''>Choose Sub menu</option>";
        $submenu = Canada_submenu::where("canada_menus_id",$request->id)->get();
            foreach($submenu as $m)
            {
                $s.="<option value='".$m->id."'>".$m->submenu."</option>";
            }


        echo $s;
    }

    public function create()
    {
        $data = Canada_menu::get();
         $submenu = Canada_submenu::get();
        return view('admin.addcanada',compact('data','submenu'));
    }
    public function store(Request $data)
    {
      // $validatedData =  "/^[a-zA-Z ]+$/";
      // $name= $data->name;
      // if(preg_match($validatedData,$name))
      // {
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Canada;
               $name= $data->name;
               $alt = $data->alt;
               $faq= $data->faq;
               $answer= $data->answer;
               $submenu_name = $data->submenu_name;
               $menu_name= $data->menu_name;
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
                   $obj->sub_menu = $submenu_name;
                   $obj->menu = $menu_name;
                   $obj->description = $description;
                   $obj->image = $new_image;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("canada");
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
                   $obj= new Canada;
                   $name= $data->name;
                   $alt = $data->alt;
                   $faq = $data->faq;
                   $answer = $data->answer;
                   $submenu_name = $data->submenu_name;
                   $menu_name= $data->menu_name;
                   $description= $data->description;
                   
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->menu = $menu_name;
                   $obj->faq = $faq;
                   $obj->answer = $answer;
                   $obj->sub_menu = $submenu_name;
                   $obj->description = $description;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                 
                

                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("canada");
                   }

           }
      // }
      // else
      // {
      //     Session::flash('message', '<span style="color:red"><h1>Use Aplphabets only</h1></span>');
      //     return redirect("canada_form");
      // }
        
    }
    public function edit($id)
    {
        $data = Canada::find($id);
      //  dd($data);
        return view('admin.editcanada',compact('data'));
    }
    public function update(Request $data)
    {
        // $dats=Canada::all();
        // foreach($dats as $d){
        //     $seo_url=strtolower(str_replace(" ","-",$d->name));
        //     $d1=Canada::find($d->id);
        //     $d1->seo_url=$seo_url;
        //     $d1->meta_title=$d->name;
        //     $d1->meta_keywords=$d->name;
        //     $d1->meta_description=$d->name;
        //     $d1->save();
        // }
      $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Canada;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $faq = $data->faq;
               $answer = $data->answer;
               $description= $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=Canada::find($id);
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->image = $new_image;
                   $obj->faq = $faq;
                   $obj->answer = $answer;
                   $obj->description = $description;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;
                 

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("canada");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Canada;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $faq = $data->faq;
               $answer = $data->answer;
               $description= $data->description;
               
               $obj=Canada::find($id);
               $obj->name = $name;
               $obj->alt = $alt;
               $obj->faq = $faq;
               $obj->answer = $answer;
               $obj->description = $description;
                       $obj->seo_url = $data->seo_url;
                       $obj->meta_title = $data->meta_title;
                       $obj->meta_keywords = $data->meta_keywords;
                       $obj->meta_description = $data->meta_description;

                   if($obj->save())
                   {
                       return redirect("canada");
                   }

           }
        
    }
    public function destroy($id,$image='Null')
    {
       $data = Canada::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("canada/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("canada/");
           }
       }
        
    }
}
