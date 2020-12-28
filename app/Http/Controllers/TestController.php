<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request){

      //  $value = $request->session()->get('key',1);
      //  echo $value;
      $category = Category::with('product')->orderby('id','asc')->get();
      view()->share('category', $category);
      return view('test');

    }

    public function view(){

        return view('test');
    }
}
