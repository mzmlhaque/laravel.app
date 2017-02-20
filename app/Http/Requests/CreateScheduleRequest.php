<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateScheduleRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255', 'min:3'],
            'origin' => ['required', 'max:255', 'min:3'],
            'destination' => ['required', 'max:255', 'min:3'],
            'arrtime' => ['required', 'max:255', 'min:3'],
            'deptime' => ['required', 'max:255', 'min:3'],
            
        ];
    }
}
