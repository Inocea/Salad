<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaladRequest extends FormRequest
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
            'salad.title' => 'required|string|max:100',
            'salad.recipe' => 'required|string|max:4000',
            'salad.point' => 'required|string|max:4000',
        ];
    }
}
