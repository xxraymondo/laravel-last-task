<?php

namespace App\Http\Requests\Resturant;

use App\Models\Resturant;
use Illuminate\Foundation\Http\FormRequest;
class CreateResturantRequest extends FormRequest
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
            'resturant_name'=>'required|string:Resturants',

        ];
    }
    public function createResturant():Resturant{
    return Resturant::create([
        'resturant_name' => $this->resturant_name
    ]);
    }
}
