<?php

namespace App\Http\Controllers;
use App\Slider;

use Illuminate\Http\Request;
use Session;


class SliderController extends Controller
{
    public function index()
    {
    	$data = Slider::get();
    	return view('admin.slider',compact('data'));
    }
    public function slider_form()
    {
    	return view('admin.addslider');
    }
    public function insertslider(Request $data)
    {
      $validatedData =  "/^[a-zA-Z ]+$/";
      $name= $data->name;
      if(preg_match($validatedData,$name))
      {
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Slider;
               $name= $data->name;
               $alt= $data->alt;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("slider");
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
                   $obj= new Slider;
                   $name= $data->name;
                   $alt= $data->alt;
                   $obj->name = $name;
                   $obj->alt = $alt;
                

                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("slider");
                   }

           }
      }
      else
      {
          Session::flash('message', '<span style="color:red"><h1>Use Aplphabets only</h1></span>');
          return redirect("slider_form");
      }
    	
    }
    public function getdataforedit($id)
    {
        $data = Slider::find($id);
        return view('admin.editslider',compact('data'));
    }
    public function editslider(Request $data)
    {
        $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new Slider;
               $id= $data->id;
               $name= $data->name;
               $alt= $data->alt;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=Slider::find($id);
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("slider");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new Slider;
               $id= $data->id;
               $name= $data->name;
               $alt= $data->alt;
               
                   $obj=Slider::find($id);
                   $obj->name = $name;
                   $obj->alt = $alt;

                   if($obj->save())
                   {
                       return redirect("slider");
                   }

           }
    }
  public function deleteslider($id,$image='Null')
    {
       $data = Slider::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("slider");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("slider");
           }
       }
       
    }

}
