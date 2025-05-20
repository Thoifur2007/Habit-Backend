<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ibadah;
use Illuminate\Http\Request;
use App\Http\Requests\IbadahRequest;
use Illuminate\Support\Facades\Validator;

class IbadahController extends Controller
{
    /**
     * Menampilkan daftar seluruh ibadah
     */
    public function index()
    {
        $ibadah = Ibadah::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Daftar semua ibadah',
            'data' => $ibadah
        ], 200);
    }

    /**
     * Menyimpan data ibadah baru
     */
    public function store(IbadahRequest $request)
{
    $ibadah = Ibadah::create($request->validated());

    return response()->json([
        'status' => 'success',
        'message' => 'Ibadah berhasil ditambahkan',
        'data' => $ibadah
    ], 201);
}

    /**
     * Menampilkan data ibadah tertentu
     */
    public function show($id)
    {
        $ibadah = Ibadah::find($id);

        if (!$ibadah) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data ibadah tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $ibadah
        ], 200);
    }

    /**
     * Memperbarui data ibadah tertentu
     */
    public function update(Request $request, $id)
    {
        $ibadah = Ibadah::find($id);

        if (!$ibadah) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data ibadah tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|min:3',
            'category' => 'sometimes|required|in:wajib,sunah',
            'date' => 'sometimes|required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak valid',
                'errors' => $validator->errors()
            ], 422);
        }

        $ibadah->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Data ibadah berhasil diperbarui',
            'data' => $ibadah
        ], 200);
    }

    /**
     * Menghapus data ibadah tertentu
     */
    public function destroy($id)
    {
        $ibadah = Ibadah::find($id);

        if (!$ibadah) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data ibadah tidak ditemukan'
            ], 404);
        }

        $ibadah->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data ibadah berhasil dihapus'
        ], 200);
    }
}
