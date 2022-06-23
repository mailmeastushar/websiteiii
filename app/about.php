<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    //
    protected $fillable=[
            "name",
            "image",
            'description',
            "meta_title",
            "meta_keywords",
            "meta_description"
        
        ];
}
