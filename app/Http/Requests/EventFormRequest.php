<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'event_title' => 'required',
            'description' => 'required',
            'event_date' => 'required|date',
            'event_time' => 'required|',
        ];
        if (in_array($this->method(), ['POST'])) {
            $rules['image'] = 'required|image';
        }
        return $rules;
    }
}
