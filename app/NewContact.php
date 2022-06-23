<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewContact extends Model
{
    public $table = "new_contacts";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'mobile',
		'email',
		'state'
    ];
}
