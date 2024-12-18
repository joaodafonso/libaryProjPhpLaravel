<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'title' => 'required|string|max:255',
                'genre' => 'required|string|max:100',
                'isbn'  => 'required|unique:books|min:13|max:13',
                'language' => 'required|string',
                'published' => 'required|date',
                'observations' => 'nullable|string',
                'author_id' => 'required|exists:authors,id',    
        ];
    }
}
