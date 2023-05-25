<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryFormRequest extends FormRequest
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
        $rules  = [
            'name' => 'required|string|max:20',
            'cover_image' => 'required|image|mimes:jpg,png,jpeg|max:8192'
        ];

        return $rules;
    }

    public function store()
    {
    }

    public function update()
    {
    }
}
