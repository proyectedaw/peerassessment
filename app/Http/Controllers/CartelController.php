<?php

namespace App\Http\Controllers;

use App\Cartel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Image;

class CartelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function showCartelList()
    {
        $carteles = Cartel::all();
        return view('evaluacionproyecto')->with('carteles', $carteles);
    }

    public function addCartel()
    {
        return view('formentregaproyecto');
    }

    public function saveCartel(Request $request)
    {

         $file = Input::file('pic');
         $img = Image::make($file);
         Response::make($img->encode('jpeg'));

         $Cartel = new Cartel;
         $Cartel->name = $request->get('name');
         $Cartel->pic = $img;
         $Cartel->save();


         return Redirect::to('list');
    }

    /*
     * Extracts Cartel's data from DB and makes an image 
     */
    public function showCartel($id)
    {
        $Cartel = Cartel::findOrFail($id);
        $pic = Image::make($Cartel->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}
