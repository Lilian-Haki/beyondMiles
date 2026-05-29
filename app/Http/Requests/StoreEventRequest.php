<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Add auth logic if needed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|string|max:255',
            'event_date' => 'required|date|after:now',
            'status' => 'required|string|in:active,inactive,cancelled',
            'location' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:0',
            'image' => 'nullable|url',
        ];
    }
}
