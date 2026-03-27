<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatestudentsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $studentId = $this->route('student')?->id;

        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'code' => ['sometimes', 'string', 'max:255', Rule::unique('students', 'code')->ignore($studentId)],
            'email' => ['sometimes', 'email', 'max:255', Rule::unique('students', 'email')->ignore($studentId)],
            'phone' => ['nullable', 'digits_between:8,10'],
            'birthday' => ['nullable', 'date'],
            'status' => ['nullable', 'in:active,inactive'],
        ];
    }
}
