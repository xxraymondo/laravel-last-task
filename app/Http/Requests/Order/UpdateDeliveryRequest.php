<?php

namespace App\Http\Requests\Order;
use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'amount'=>'required|string:Orders',
            'address'=>'required|string:Orders'
        ];
    }

    public function updateOrder():Order{
       $Order = Order::find($this->id);
       $Order->update([
        'amount'=>$this->amount,
        'address'=>$this->address
       ]);
       return $Order;
        }
}
