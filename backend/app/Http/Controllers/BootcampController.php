<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller

{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return bootcamp::all();
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //Capturo el payload
    //crear el nuevo bootcamp
    return bootcamp::create(
      $request->all()
    );
  }

  /**
  * Display the specified resource.
  *
  * @param int $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
  return bootcamp::find($id);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param \Illuminate\Http\Request $request
  * @param int $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
   //1. encontrar el bootcamp por id
   $b = Bootcamp::find($id);
   //2. actualizarlo
   $b->update($request->all());
   //3. enviar response con el bootcam actuallizado
    return $b;
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param int $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //1. encontrar el bootcamp por id
    $b = Bootcamp::find($id);
    //2. eliminarlo
    $b->delete();
    //3. response con el objeto eliminado
    return $b;
    
  }
}

