<?php

namespace App\Http\Controllers;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $items = Auth::user()->items();


        return view('home'
//            , array(
//            'items' => $items
//        )
        );
    }

    public function getNew() {
        return view('new');
    }

    public function postNew() {
        $rules = array('name' => 'required|min:3|max:255');
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::route('new')->withErrors($validator);
        }

        $item = new Item;
        $item->name = Input::get('name');
        $item->owner_id = Auth::user()->id;
        $item->save();

        return Redirect::route('home');
    }
}
