<?php

namespace App\Http\Controllers;
use App\Http\Requests\Delivery\CreateDeliveryRequest;
use App\Http\Requests\Delivery\UpdateDeliveryRequest;
use App\Http\Resources\DeliveryResource;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    //
    public function index(){
        $deliveries=Delivery::get();
        return response()->json([
            'success'=>true,
            'data'=>$deliveries
        ]);
    }
    public function create(CreateDeliveryRequest $request)
     {
    $delivery=  $request->createDelivery();

     return new DeliveryResource($delivery);
    }
    public function update(UpdateDeliveryRequest $request)
    {
   $delivery=  $request->updateDelivery();

    return new DeliveryResource($delivery);
   }
   public function delete()
   {
    $delivery = Delivery::findOrFail($id);
    $delivery ->delivery();
    return response()->json([
        'message'=>'delivery deleted successfully',
    ]);
  }
}
