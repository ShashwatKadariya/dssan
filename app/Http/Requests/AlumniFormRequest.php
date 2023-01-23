<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniFormRequest extends FormRequest
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
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'contact' => 'required',
            'social_link' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'current_university' => 'required',
            'major_subject' => 'required',
        ];
        return $rules;
    }
}
