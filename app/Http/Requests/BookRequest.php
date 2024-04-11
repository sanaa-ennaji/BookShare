<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:200'],
            'image' => ['nullable', 'string'],
            'author' => ['nullable', 'string'],
            'ISBN' => ['nullable', 'integer'],
            'quantity' => ['nullable', 'integer'],
            'status' => ['nullable', 'string', 'max:45'],
            'description' => ['nullable', 'string'],
            'lang' => ['nullable', 'json'],
            'price' => ['required', 'numeric'],
            'store_id' => ['required', 'exists:stores,id'],
            'categorie_id' => ['required'],
            'rating' => ['nullable', 'string'],
        ];
    }
}
