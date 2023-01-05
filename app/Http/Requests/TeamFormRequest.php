<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamFormRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'position' => 'required',
            'statement' => 'required',
            'linkedin_url' => 'required',
        ];
        if (in_array($this->method(), ['POST'])) {
            $rules['image'] = 'required|image';
        }
        return $rules;
    }
}
