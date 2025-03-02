<?php

namespace App\Http\Requests\Reservations;

use App\Enums\Reservations\ReservationTypesEnum;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'pax' => 'required|integer',
            'event' => 'nullable|string',
            'note' => 'nullable|string',
            'type' => 'required|in:' . implode(',', ReservationTypesEnum::getValues()),
        ];
    }
}
