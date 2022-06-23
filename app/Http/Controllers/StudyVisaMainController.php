<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudyVisaMain;
use Session;
use App\country_study_visa;

class StudyVisaMainController extends Controller
{
    public function index()
    {
        $data = StudyVisaMain::get();
        return view('admin.mainstudyvisa',compact('data'));
    }
    public function create()
    {
        $data = country_study_visa::get();
        return view('admin.addstudyvisamain',compact('data'));
    }
    public function store(Request $data)
    {

              $file= $data->file('image');

               if(!empty($file))
                   {
                   $obj= new StudyVisaMain;

                   $name= $data->name;
                   $alt = $data->alt;
                   $service_name = $data->service_name;
                   $description = $data->description;

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
                       $obj->image = $new_image;

                       if($obj->save())
                       {
                           #echo "data inserted";
                           Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                           return redirect("mainstudyvisa");
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
                       $obj= new StudyVisaMain;
                       $name = $data->name;
                       $alt = $data->alt;
                       $service_name = $data->service_name;
                       $description = $data->description;

                       $obj->name = $name;
                       $obj->alt = $alt;
                       $obj->country_study_visa = $service_name;
                       $obj->description =   $description;
                    

                       if($obj->save())
                       {
                            #echo "data inserted";
                           return redirect("mainstudyvisa");
                       }

               }
         
    }
    public function edit($id)
    {
        $data = StudyVisaMain::find($id);
        return view('admin.editmainstudyvisa',compact('data'));
    }

    public function update(Request $data)
    {
          $file= $data->file('image');

           if(!empty($file))
               {
               $obj= new StudyVisaMain;
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
                   $obj=StudyVisaMain::find($id);
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("mainstudyvisa");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new StudyVisaMain;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $description = $data->description;

               $obj=StudyVisaMain::find($id);

               $obj->name = $name;
               $obj->alt = $alt;
               $obj->description = $data->description;

               if($obj->save())
               {
                   return redirect("mainstudyvisa");
               }

           }
    }
    public function destroy($id,$image='Null')
    {
       $data = StudyVisaMain::find($id);
       if($image=='Null')
       {
          if($data->delete())
           {
              return redirect("mainstudyvisa");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("mainstudyvisa");
           }
       }
       
    
    }
}
