<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
//use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Facades\Image as Image;

use App\Campanya;
use App\Proyecto;

class ImageController extends Controller
{
    public function showPictureList()
    {
        $proyectes = Proyecto::all();
        return view('picturelist')->with('proyectes', $proyectes);
    }

    public function addPicture()
    {
        $campanyas = Campanya::all();
        return view('formentregaproyecto',compact('campanyas'));
    }

    public function savePicture(Request $request)
    {

         $file = Input::file('cartel');
         $img = Image::make($file);
         Response::make($img->encode('jpeg'));

         $proyecte = new Proyecto;
         $proyecte->id_participant = 1; //Lo  debe pillar de la sesion del participante, para que quede el proyecto subido asignado al participante que está logueado
         $proyecte->id_admin = 1;
         $proyecte->titol = $request->get('titol');
         $proyecte->cartel = $img;
         $proyecte->descripcion = $request->get('coments');
         $proyecte->save();
//Si la subida es correcta abrir un modal en lugar de una nueva pagina.

         return Redirect::to('entregasatisfactoria');//En lugar de entrar aquí lanzar mensaje de que se ha subido correctamente
    }

    /*
     * Extracts picture's data from DB and makes an image 
     */
    public function showPicture($id)
    {
        $proyecte = Proyecto::findOrFail($id);
        $cartel = Image::make($proyecte->cartel);
        $response = Response::make($cartel->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
    public function mostrarcartel($id)
    {
        $proyecte = Proyecto::findOrFail($id);
        $cartel = Image::make($proyecte->cartel);
        $response = Response::make($cartel->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}