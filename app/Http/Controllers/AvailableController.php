<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Available;
class AvailableController extends Controller
{
    public function index()
    {
    	$data = Available::get();
    	return view('admin.check',compact('data'));
    }
}
