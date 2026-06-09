<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
   public function show($id=1){
     
$mechanic = Mechanic::find($id);
$owner = $mechanic->carOwner;
dd($owner );


   }
}
