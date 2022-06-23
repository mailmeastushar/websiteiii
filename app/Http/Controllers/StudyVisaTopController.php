<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyVisaTop;
use Session;
use App\country_study_visa;

class StudyVisaTopController extends Controller
{
    public function index()
    {
        $data = StudyVisaTop::get();
        return view('admin.topstudyvisa',compact('data'));
    }
    public function create()
    {
        $data = country_study_visa::get();
        return view('admin.addstudyvisatop',compact('data'));
    }
    public function store(Request $data)
    {

              $file= $data->file('image');

               if(!empty($file))
                   {
                   $obj= new StudyVisaTop;

                   $name= $data->name;
                   $alt = $data->alt;
                   $service_name = $data->service_name;
                   $description = $data->description;
                   
                   $meta_title = $data->meta_title;
                   $meta_description = $data->meta_description;

                   $file= $data->file('image');
                   $ext = $file->getClientOriginalExtension();
                   $new_image=rand().".".$ext;
                   $path= public_path("/assets/images/");
                   
                   if($file->move($path,$new_image))
                   {
                       $obj->name = $name;
                       $obj->alt = $alt;
                       $obj->country_study_visa = $service_name;
                       $obj->description = $description;
                       
                       $obj->meta_title =  $meta_title;
                       $obj->meta_description =  $meta_description;
                       
                       $obj->image = $new_image;

                       if($obj->save())
                       {
                           #echo "data inserted";
                           Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                           return redirect("topstudyvisa");
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
                       $obj= new StudyVisaTop;
                       $name = $data->name;
                       $alt = $data->alt;
                       $service_name = $data->service_name;
                       $description = $data->description;
                       $meta_title = $data->meta_title;
                       $meta_description = $data->meta_description;

                       $obj->name = $name;
                       $obj->alt = $alt;
                       $obj->country_study_visa = $service_name;
                       $obj->description =   $description;
                         $obj->meta_title =  $meta_title;
                       $obj->meta_description =  $meta_description;
                    

                       if($obj->save())
                       {
                            #echo "data inserted";
                           return redirect("topstudyvisa");
                       }

               }
         
    }
    public function edit($id)
    {
        $data = StudyVisaTop::find($id);
        return view('admin.edittopstudyvisa',compact('data'));
    }

    public function update(Request $data)
    {
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new StudyVisaTop;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $description = $data->description;
                $meta_title = $data->meta_title;
                   $meta_description = $data->meta_description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=StudyVisaTop::find($id);
                   $obj->name = $name;
                   $obj->alt = $alt;
                     $obj->meta_title =  $meta_title;
                       $obj->meta_description =  $meta_description;
                   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("topstudyvisa");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new StudyVisaTop;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
                $meta_title = $data->meta_title;
                   $meta_description = $data->meta_description;
               $description = $data->description;

               $obj=StudyVisaTop::find($id);

               $obj->name = $name;
               $obj->alt = $alt;
               $obj->meta_title =  $meta_title;
               $obj->meta_description =  $meta_description;
               $obj->description = $data->description;

               if($obj->save())
               {
                   return redirect("topstudyvisa");
               }

           }
    }
    public function destroy($id,$image='Null')
    {
       $data = StudyVisaTop::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("topstudyvisa");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("topstudyvisa");
           }
       }
       
    
    }
}
