<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BatchFormRequest extends FormRequest
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
            'batch' => 'required|unique:batches|min:13',
        ];
        if (in_array($this->method(), ['POST'])) {
            $rules['image'] = 'required|image';
        }
        if (in_array($this->method(), ['PUT'])) {
            $rules['batch'] = 'required';
        }
        return $rules;
    }
}
