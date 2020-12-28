<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Address;

use App\Models\Menu;

use App\Models\Month;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       ///$users=User::all();
      /// view()->share('users', $users);

       $august=Month::find(1);
       $augusts=$august->affected;

       $september=Month::find(2);
       $septembers=$september->affected;

       $october=Month::find(3);
       $octobers=$october->affected;

       $november=Month::find(4);
       $novembers=$november->affected;

       $december=Month::find(5);
       $decembers=$december->affected;

      view()->share('augusts', $augusts);
      view()->share('septembers', $septembers);
      view()->share('octobers',$octobers);
      view()->share('novembers',$novembers);
      view()->share('decembers',$decembers);


       ////$menu = Menu::with('submenu')->orderby('weight','asc')->get();


       //// $items=User::all();

      /// $items=\App\Models\User::with('addresses')->get();
        ///view()->share('menu', $menu);
       return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
