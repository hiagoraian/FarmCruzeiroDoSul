<?php

namespace App\Http\Controllers;

use App\Models\Equine;
use Illuminate\Http\Request;

class EquineController extends Controller
{   
  public function destroy(string|int $id){
    if(!$equine = Equine::find($id)){
        return back();
    }
    $equine->delete();

    return redirect()->route('dashboard');
  }
}
