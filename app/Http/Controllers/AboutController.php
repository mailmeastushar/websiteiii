<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\about;

class AboutController extends Controller
{
    public function index()
    {
    	$data = about::paginate(1);
    	return view('admin.about',compact('data'));
    }
    public function about_form()
    {
    	return view('admin.addabout');
    }
    public function addabout(Request $request)
    {
         $data=$request->all();
            if($request->hasFile("file")){
                $ext = $request->file('image')->getClientOriginalExtension();
                $new_image=rand().".".$ext;
                $path= public_path("/assets/images/");
                $request->file('image')->move($path,$new_image);
                $data['image']=$new_image;
            }
            about::create($data);
            return redirect('about');
    }
    public function deleteabout($id,$image='Null')
    {
       $data = about::find($id);
       if($data){
          $data->delete();
          return redirect("about");
       }
       return abort(404);
    }
    public function editabout($id)
    {
    	$data = about::find($id);
    	if($data){
            return view('admin.editabout',compact('data'));
    	}
    	return abort(404);
    }
    
    public function updateabout(Request $request)
    {
        $about=about::find($request->id);
        if($about){
            $data=$request->all();
            if($request->hasFile("file")){
                $ext = $request->file('image')->getClientOriginalExtension();
                $new_image=rand().".".$ext;
                $path= public_path("/assets/images/");
                $request->file('image')->move($path,$new_image);
                $data['image']=$new_image;
            }
            about::find($request->id)->update($data);
            return redirect('about');    
        }
        return redirect('about');
    }
}
