<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class IbadahRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'category' => 'required|in:wajib,sunah',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama ibadah wajib diisi',
            'name.min' => 'Nama ibadah minimal 3 karakter',
            'category.required' => 'Kategori ibadah wajib diisi',
            'category.in' => 'Kategori hanya boleh diisi dengan "wajib" atau "sunah"',
            'date.required' => 'Tanggal ibadah wajib diisi',
            'date.date' => 'Tanggal ibadah harus dalam format tanggal yang valid',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'message' => 'Data tidak valid',
            'errors' => $validator->errors()
        ], 422));
    }
}

