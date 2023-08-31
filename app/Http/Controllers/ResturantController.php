<?php

namespace App\Http\Controllers;

use App\Http\Requests\Resturant\CreateResturantRequest;
use App\Http\Requests\Resturant\UpdateResturantRequest;
use App\Http\Resources\ResturantResource;
use App\Models\Resturant;

class ResturantController extends Controller
{
    public function index(){
        $resturants=Resturant::get();
        return response()->json([
            'success'=>true,
            'data'=>$resturants
        ]);
    }
    public function create(CreateResturantRequest $request)
     {
    $Resturant=  $request->createResturant();

     return new ResturantResource($Resturant);
    }
    public function update(UpdateResturantRequest $request)
    {
   $Resturant=  $request->updateResturant();

    return new ResturantResource($Resturant);
   }
   public function delete()
   {
    $Resturant = Resturant::findOrFail($id);
    $Resturant ->Resturant();
    return response()->json([
        'message'=>'Resturant deleted successfully',
    ]);
  }
}
