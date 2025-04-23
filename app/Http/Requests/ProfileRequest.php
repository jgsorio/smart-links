<?php

namespace App\Http\Requests;

use App\Rules\CheckHandler;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;


/**
 * @property-read UploadedFile
 * |null $avatar
 */
class ProfileRequest extends FormRequest
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
            'avatar' => ['nullable', 'max:2048'],
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'description' => ['nullable', 'string', 'max:255'],
            'handler' => ['required', 'string', 'max:255', 'unique:users,handler,' . $this->user()->id, new CheckHandler],
        ];
    }
}
