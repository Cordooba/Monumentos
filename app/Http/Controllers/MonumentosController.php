<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Monumento;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class MonumentosController extends Controller
{
    public function index ()
    {
      $monumentos = Monumento::all();
      return view ('monumentos.welcome', compact('monumentos'));
    }

    public function show (Monumento $monumento)
    {
      //$monumento = ['Catedral de Sevilla','Sevilla','Gótico'];
      //$monumento = DB::table('monumentos')->where('ciudad', 'Sevilla')->delete();
      //$monumento = DB::table('monumentos')->where('ciudad', 'Sevilla')->get();

      //$monumento = Monumento::find($id);

      //$monumento = Monumento::with('opinione.usser')->find(1);

      $monumento->load('opinione.usser');

      return view('monumentos.monumento', compact('monumento'));
    }

    public function aboutIndex ()
    {
      return view('about');
    }
}
