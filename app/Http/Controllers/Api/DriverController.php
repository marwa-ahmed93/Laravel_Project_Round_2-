<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
   public function index(){
      $driver = Driver::all();
      return response()->json( data:[
         'status' => 'success',
     'data'=> DriverResource::collection($driver)

      ],
       status:200
      );
      //  return response()->json(new  DriverResource($driver ));
   }
}
