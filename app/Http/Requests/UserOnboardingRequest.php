<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserOnboardingRequest extends FormRequest
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
            'sport_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'nationality' => 'required',
            'gender' => 'required',
            'age' => 'required|date_format:Y/m/d',
            'height' => 'required|integer|digits_between:2,3',
            'weight' => 'required|integer|digits_between:2,3',
            'positions' => 'required',
            'salary' => 'required|integer|digits_between:3,7',
            'currency' => 'required',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
            'biography' => 'required',
            'continents' => 'required',
            'career' => 'required',
        ];
    }
}
