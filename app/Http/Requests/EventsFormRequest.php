<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'month'=>[
                'nullable',
                'string',
                'max:25'
            ],
            'date'=>[
                'nullable',
                'string',
                'max:25'
            ],
            'title'=>[
                'nullable',
                'string',
                'max:255'
            ],
            'time'=>[
                'nullable',
                'string',
                'max:255'
            ],
            'link'=>[
                'nullable',
                'string',
            ],
            'status'=>[
                'nullable',
            ],

        ];
    }
}
