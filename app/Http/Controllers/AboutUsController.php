<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function program($id){
        return '<a href = "https://www.educastudio.com/aout-us'.$id.'">
        https://www.educastudio.com/about-us/'.$id.'</a>';
    }
    //
}
