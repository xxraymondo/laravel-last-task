<?php

namespace App\Http\Requests\Resturant;
use App\Models\Resturant;
use Illuminate\Foundation\Http\FormRequest;

class UpdateResturantRequest extends FormRequest
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
            'resturant_name'=>'required|string:Resturants',
        ];
    }

    public function updateResturant():Resturant{
       $Resturant = Resturant::find($this->id);
       $Resturant->update([
        'resturant_name'=>$this->resturant_name
       ]);
       return $Resturant;
        }
}
