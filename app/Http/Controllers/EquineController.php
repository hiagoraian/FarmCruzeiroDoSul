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

  public function create(){
    return view ('equine.create');
  }

  public function edit(Equine $equine, string|int $id){

    if(!$equine = $equine->where('id', $id)->first()){
      return redirect()->route('dashboard');
    }

    return view('equine.edit', compact('equine'));
  }

  public function store(Request $request, Equine $equine){
    $data = $request->all();
    $equine->create($data);

    return redirect()->route('dashboard');
  }
  
      public function update(string|int $id, Request $request, Equine $equine){
        
        $equine = Equine::find($id);

        if(!$equine){
            return back();
        }  

        $equine->update($request->only([
            'name',
            'race',
            'father',
            'mother',
            'description',
            'age',
            'gender'
        ]));

        return redirect()->route('dashboard');
    }
 
  }
