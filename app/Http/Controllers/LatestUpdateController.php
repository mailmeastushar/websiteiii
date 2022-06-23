<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LatestUpdate;
use App\Blog_comments;
use Session;
class LatestUpdateController extends Controller
{
    public function index()
    {
    	$data = LatestUpdate::orderby('created_at','desc')->paginate(15);
    	return view('admin.latestupdate',compact('data'));
    }
    public function latestupdate_form()
    {
    	return view('admin.addlatestupdate');
    }
    public function addlatestupdate(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new LatestUpdate;
               $name= $data->name;
               $alt = $data->alt;
               $seo_url = $data->seo_url;
               $short_description = $data->short_description;
               $button_title = $data->button_title;
               $description = $data->description;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->seo_url = $seo_url;
                   
                   $obj->meta_title = $data->meta_title;
                   $obj->meta_keywords = $data->meta_keywords;
                   $obj->meta_description = $data->meta_description;
                   
                   $obj->short_description = $short_description;
                   $obj->button_title = $button_title;
              	   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       #echo "data inserted";
                       Session::flash('message', '<span style="color:green"><h1>Successfully Added!</h1></span>');
                       return redirect("latest_update");
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
                   $obj= new LatestUpdate;
                   $name= $data->name;
                   $alt = $data->alt;
                   $seo_url = $data->seo_url;
               	   $description = $data->description;
                   $short_description = $data->short_description;
                   $button_title = $data->button_title;
               	   
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->seo_url = $seo_url;
                   $obj->meta_title = $data->meta_title;
                   $obj->meta_keywords = $data->meta_keywords;
                   $obj->meta_description = $data->meta_description;
                   $obj->short_description = $short_description;
                   $obj->button_title = $button_title;
                   $obj->description = $description;
                

                   if($obj->save())
                   {
                        #echo "data inserted";
                       return redirect("latest_update");
                   }

           }
    }
    public function deletelatestupdate($id,$image="")
    {
       $data = LatestUpdate::find($id);
       if(empty($image) || is_null($image))
       {
          if($data->delete())
           {
              return redirect("latest_update/");
           }
       }
       else
       {
          if($data->delete())
           {
              unlink('public/assets/images/'.$image);
              return redirect("latest_update/");
           }
       }
    }
    public function editlatestupdate($id)
    {
    	$data = LatestUpdate::find($id);
        return view('admin.editlatestupdate',compact('data'));
    }
    public function updatelatestupdate(Request $data)
    {
    	$file= $data->file('image');

           if(!empty($file))
               {
               $obj= new LatestUpdate;
               $id= $data->id;
               $name= $data->name;
               $alt = $data->alt;
               $description = $data->description;
               $short_description = $data->short_description;
               $button_title = $data->button_title;
               $file= $data->file('image');
               $ext = $file->getClientOriginalExtension();
               $new_image=rand().".".$ext;
               $path= public_path("/assets/images/");
               
               if($file->move($path,$new_image))
               {
                   $obj=LatestUpdate::find($id);
                   $obj->name = $name;
                   $obj->alt = $alt;
                   $obj->meta_title = $data->meta_title;
                   $obj->meta_keywords = $data->meta_keywords;
                   $obj->seo_url = $data->seo_url;
                   $obj->meta_description = $data->meta_description;
                   $obj->short_description = $short_description;
                   $obj->button_title = $button_title;
                   $obj->description = $description;
                   $obj->image = $new_image;

                   if($obj->save())
                   {
                       //unlink('public/images/'.$file);
                       return redirect("latest_update");
                   }

                   }
               else
               {
                   echo "images not uploaded";
               }
           }
           else
           {
               $obj= new LatestUpdate;
               $id= $data->id;
               $alt = $data->alt;
               $name= $data->name;
               $description = $data->description;
               $short_description = $data->short_description;
               $button_title = $data->button_title;
               
                   $obj=LatestUpdate::find($id);
                   $obj->name = $name;
                   $obj->meta_title = $data->meta_title;
                   $obj->meta_keywords = $data->meta_keywords;
                   $obj->seo_url = $data->seo_url;
                   $obj->meta_description = $data->meta_description;
                   $obj->alt = $alt;
                   $obj->description = $description;
                   $obj->short_description = $short_description;
                   $obj->button_title = $button_title;
                   if($obj->save())
                   {
                       return redirect("latest_update");
                   }

           }
    }


    public function latest_update_comments($id) {
        $blog = LatestUpdate::find($id);
    	$data = Blog_comments::where('blog_id',$id)->orderby('created_at','desc')->paginate(15);
    	return view('admin.latestupdatecomments',compact('blog','data'));
    }
    public function active_inactive_comment($id,$status) {
        if($status==1){
            $status=1;
        }else{
            $status=0;
        }
        $obj=Blog_comments::find($id);
        $obj->is_visible = $status;
        if($obj->save()) {
            return redirect()->back();
        }
    }
    public function add_comment_reply(Request $data) {
        $obj=Blog_comments::find($data->blog_comment_id);
        $obj->reply     = trim($data->reply);
        $obj->reply_at  = date('Y-m-d H:i:s');
        if($obj->save()) {
            return redirect()->back();
        }
    }
    public function delete_latest_update_comment($id) {
        $data = Blog_comments::find($id);
        if($data->delete()) {
            return redirect()->back();
        }
    }

}
