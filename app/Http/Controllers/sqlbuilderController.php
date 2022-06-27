<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RexShijaku\SQLToLaravelBuilder\SQLToLaravelBuilder;

class sqlbuilderController extends Controller
{
    public function convert(Request $request)
    {
        $value = $request->input('sql');
        $options = array('facade' => 'DB::');
        $converter = new SQLToLaravelBuilder($options);
 
        $result =  $converter->convert($value);

        return view('welcome',compact('result'));   
    }
}
