<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SystemUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'image1' => ['image', 'max:1024', 'nullable'],
            'image2' => ['image', 'max:1024', 'nullable'],
            'image3' => ['image', 'max:1024', 'nullable'],
            'image4' => ['image', 'max:1024', 'nullable'],
        ];
    }
}
