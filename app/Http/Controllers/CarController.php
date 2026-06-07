<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CarController extends Controller
{
  public function create(){
    return View('cars.create');
  }

  public function store(Request $request){
    // dd($request->all());
      $validated = $request->validate([
        'name' => 'required',
        'plate_number' => 'required',
        'price'=> 'required',
        'img'=> 'required|mimes:jpg,bmp,png'
    ]);

   $image =  Storage::put('avatars',$validated['img']);

    Car::insert([
        'name'=> $validated['name'],
        'plate_number'=> $validated['plate_number'],
        'price'=> $validated['price'],
        'img'=>  $image 
    ]);
return redirect()->route('car.index');
  }



  public function index(){
   $cars =  Car::withTrashed()->get();
    return view('cars.index' ,  compact('cars') );
  }

public function delete($id){

$car = Car::findOrFail($id)->delete();
return redirect()->route('car.index');
}

}
