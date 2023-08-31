<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'email'=>'required|email|unique::users,email',
            'password'=>'required|string|min:8',
        ];
    }
    public function register(): User{
        try {
            $user =User::create([
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=>Hash::make($this->password),
            ]);
            return $user;
        }catch(\Exception $e) {
            return [
                'success'=>false,
                'message'=>$e,
                'data'=>$auth
            ];
        }
        
    }
}
