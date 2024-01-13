<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
   * @return array<string, ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      'name' => 'required',
      'email' => 'required|email',
      'city' => 'required',
      'age' => 'required|numeric|min:18',
      'image' => 'required|File|mimes:jpeg,jpg,png',
      'agree' => 'required'
    ];
  }

  public function messages(): array
  {
    return [
      'name.required' => 'Name is required',
      'email.required' => 'Email is required',
      'city.required' => 'City is required',
      'age.required' => 'Age is required',
      'image.required' => 'Image is required',
      'image.mimes' => 'Image must be jpeg, jpg or png',
      'image.file' => 'Image must be a file',
      'agree.required' => 'Agree is required'
    ];
  }
}
