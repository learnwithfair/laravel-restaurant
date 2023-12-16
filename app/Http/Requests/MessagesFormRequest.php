<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessagesFormRequest extends FormRequest
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
            'name'    => 'required|max:50',
            'tableNo' => 'required|max:70',
            'phone'   => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
            'guest'   => 'required|max:70',
            'date'    => 'required|max:12',
            'time'    => 'required|max:30',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => "Name must be filled up!",
            'tableNo.required' => "Table No filled must be required!",
            'phone.required'   => "Phone Number following eg- 01700000000",
            'guest.required'   => "Guest must be filled up!",
            'date.required'    => "Date must be filled up!",
            'time.required'    => "Time must be filled up!",
        ];
    }
}
