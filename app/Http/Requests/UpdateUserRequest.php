<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        $userId = $this->route('user')?->id;

        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'code' => ['sometimes', 'string', 'max:255', Rule::unique('users', 'code')->ignore($userId)],
            'email' => ['sometimes', 'email', 'max:255', Rule::unique('users', 'email')->ignore($userId)],
            'personal_email' => ['nullable', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:8'],
            'manager_id' => ['nullable', 'string', 'max:255'],
            'gender' => ['nullable', 'string', 'max:50'],
            'date_of_birth' => ['nullable', 'date'],
            'phone' => ['nullable', 'digits_between:8,10'],
            'address' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'string', 'max:255'],
            'identity_number' => ['nullable', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:50'],
            'status' => ['nullable', 'in:active,inactive'],
        ];
    }
}
