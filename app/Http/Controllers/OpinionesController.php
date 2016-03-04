<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Opinione;
use App\Monumento;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OpinionesController extends Controller
{
    public function store (Request $request, Monumento $monumento) {
      //return $request->all();

      // $opinione = new Opinione;
      // $opinione->mensaje = $request->mensaje;
      // $monumento->opinione()->save($opinione);
      //
      // return back();

      // $opinione = new Opinione(['mensaje'=> $request->mensaje]);
      // $monumento->opinione()->save($opinione);
      //
      // return back();

      // $monumento->opinione()->save(new Opinione(['mensaje'=> $request->mensaje]));
      //
      // return back();

      // $monumento->opinione()->create([
      //   'mensaje' => $request->mensaje
      // ]);
      //
      // return back();

      // $monumento->opinione()->create($request->all());
      //
      // return back();

      $opinion = new Opinione($request->all());

      $opinion->usser_id = 1;
      // $opinion->usser_id = Auth::id();
      $monumento->addOpinione($opinion);
      // $monumento->addOpinione(
      //   new Opinione( $request->all() )
      // );

      return back();
    }

    public function edit (Opinione $opinione)
    {
      return view('opiniones.edit', compact('opinione') );
    }

    public function update (Request $request, Opinione $opinione) {
      $opinione->update( $request->all() );

      return redirect('monumentos/'.$opinione->monumento_id);
    }

    public function delete (Opinione $opinione) {
      $monumento = $opinione->monumento_id;

      $opinione->delete();

      return redirect('monumentos/'.$monumento);
    }
}
