<?php

namespace App\Http\Controllers;
use App\Http\Requests\Order\CreateOrderRequest;
use App\Http\Requests\Order\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $Orders=Order::get();
        return response()->json([
            'success'=>true,
            'data'=>$Orders
        ]);
    }
    public function create(CreateOrderRequest $request)
     {
    $Order=  $request->createOrder();

     return new OrderResource($Order);
    }
    public function update(UpdateOrderRequest $request)
    {
   $Order=  $request->updateOrder();

    return new OrderResource($Order);
   }
   public function delete()
   {
    $Order = Order::findOrFail($id);
    $Order ->Order();
    return response()->json([
        'message'=>'Order deleted successfully',
    ]);
  }
}
