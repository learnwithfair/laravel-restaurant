<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderDetailsFormRequest extends FormRequest
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
            'title'       => 'required|max:30',
            'description' => 'required|max:70',
            'buttontext'  => 'required|max:50',
            'buttonlink'  => 'required|max:70',
        ];
    }

    public function messages()
    {
        return [
            'title.required'       => "Title must be filled up!",
            'description.required' => "Description filled must be required!",
            'buttontext.required'  => "Button text filled must be required!",
            'buttonlink.required'  => "Button link filled must be required!",
        ];
    }
}
