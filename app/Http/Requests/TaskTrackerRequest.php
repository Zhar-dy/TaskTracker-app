<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskTrackerRequest extends FormRequest
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
            'title' => 'required|alpha|ascii|min:5',
        ];
    }

    public function message(): array{
        return[
            'title.required' => "Title needed",
            'title.alpha.ascii' => "Enter good title",
            'title.min:5' => 'Not Good Enough',
        ];
    }
}
