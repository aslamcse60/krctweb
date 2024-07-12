<?php

namespace App\Http\Requests\Administration;

use Illuminate\Foundation\Http\FormRequest;

class ChairmanFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>[
                'nullable',
                'string',
                'max:255'
            ],
            'image'=>[
                'nullable',
                'image',
                'mimes:jpg,jpeg,png'
            ],
            'description'=>[
                'nullable',
            ],
        ];
    }
}
