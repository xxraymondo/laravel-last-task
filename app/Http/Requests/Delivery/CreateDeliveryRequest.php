<?php

namespace App\Http\Requests\Delivery;

use App\Models\Delivery;
use Illuminate\Foundation\Http\FormRequest;
class CreateDeliveryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>'required|string:deliveries',
            'last_name'=>'required|string:deliveries'


        ];
    }
    public function createDelivery():Delivery{
    return Delivery::create([
        'first_name' => $this->first_name,
        'last_name' => $this->last_name
    ]);
    }
}
