<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DriverController extends Controller
{
   public function index(){
    $drivers = DB::table('drivers')->paginate(10);
   // $drivers =  Driver::all();
//    dd($drivers);
return view('drive.index',compact('drivers'));
   }



   public function show($id){

  $driver =  Driver::findOrFail($id);
// $driver = Driver::where('id' , '>' , 10)->orderBy('name')->get();
return view('drive.show', compact('driver') );
       
   }


   public function create(){
    return View('drive.create');
   }


   public function store(Request $request){
      //   dd($request->all());
          $validated = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password'=> 'required'
    ]);

   //  Driver::create([
   //    'name'=> $validated['name'],
   //    'email'=> $validated['email'],
   //    'password'=> bcrypt($validated['password']) ,
   //  ]);

$drivers  = new Driver();
$drivers->name = $validated['name'];
$drivers->email = $validated['email'];
$drivers->password = $validated['password'];
$drivers->save();

    return redirect()->route('driver.index');
   }
}
