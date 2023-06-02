<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:100',
            'description' => 'required|min:15|max:1000',
            'thumb' => 'required|url|regex:/^https:.*/',
            'price' => 'required|numeric|min:0.01',
            'series' => 'required|min:8|max:30',
            'sale_date' => 'required|date',
            'type' => 'required|min:2|max:30',
        ];
    }
}
