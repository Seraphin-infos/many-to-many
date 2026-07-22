<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'order_number' => 'required|numeric|min:0',
            'order_date' => 'nullable|date',
            'total_amount' => 'required|numeric|min:0',
            'products'  => 'required|array|min:1',
            'status'   => 'required|in:pending,completed,canceled',
        ];
    }
}