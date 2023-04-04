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
            'image' => 'required|image|max:512',
            'first_name' => 'required',
            'last_name' => 'required',
            'designation' => 'required',
            'position' => 'required|numeric|unique:teams',
            'statement' => 'required',
            'linkedin_url' => 'required|active_url|unique:teams',
        ];
        if ($this->method() == 'PUT') {
            $rules['image'] = 'image|max:512';
            $rules['position'] = 'required|numeric|unique:teams,position,' . $this->route('team')->id;
            $rules['linkedin_url'] = 'required|active_url|unique:teams,linkedin_url,' . $this->route('team')->id;
        }
        return $rules;
    }
}
