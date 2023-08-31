<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
        ];
    }
    public function login():array{

        $credentials = $this->only('email','password');
        try {
            $auth = auth()->attempt($credentials);

            if(!$auth) throw new \Exception ('invalid credentials');

            return [
                'success'=>true,
                'token'=>auth()->user()->createToken('auth_token')->plainTextToken,
            ];
        }catch(\Exception $e) {
            return [
                'success'=>false,
                'message'=>$e,
                'data'=>$auth
            ];
        }
    }
}
