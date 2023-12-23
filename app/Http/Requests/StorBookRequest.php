<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','max:20','string','min:4'],
            'publish_house'=>['required','string','min:4'],
            'publish_date'=>['required','date'],
            'author_id'=>['required','exists:authors,id'],
            'available_quantity'=>['required','integer'],
        ];
    }
}
