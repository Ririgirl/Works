<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class bannersController extends Controller
{
    public function show() {
    	$ban = App\banners::incomplete();
    	$banners = App\banners::all()->where('id',$ban);
    	$insert_sql = App\statistics::insert(
    			array(
          'click' => 0,
          'show' => 1,
        	'banner_id' => $ban));
    	return view('welcome', compact('banners'));
    }
    public function index($id) {
    	$bannersid = App\banners::find($id);
    	return view('form', compact('bannersid'));
    }
}
