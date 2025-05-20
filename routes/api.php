<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\IbadahController;

// Route untuk API Ibadah (dengan autentikasi Sanctum)
// Route::middleware('auth:sanctum')->group(function () {
// });

Route::apiResource('ibadah', IbadahController::class);
// Route tanpa autentikasi (untuk testing)
// Route::apiResource('ibadah-public', IbadahController::class);

// Route::post('/ibadah', function () {
//     return response()->json([
//         'data' => [
//             [
//                 'id' => 1,
//                 'name' => 'Sholat Subuh',
//                 'category' => 'wajib',
//                 'date' => '2025-05-01'
//             ],
//             [
//                 'id' => 2,
//                 'name' => 'Sholat Dhuha',
//                 'category' => 'sunah',
//                 'date' => '2025-05-02'
//             ],
//             [
//                 'id' => 3,
//                 'name' => 'Puasa Ramadhan',
//                 'category' => 'wajib',
//                 'date' => '2025-03-15'
//             ],
//             [
//                 'id' => 4,
//                 'name' => 'Puasa Senin-Kamis',
//                 'category' => 'sunah',
//                 'date' => '2025-04-10'
//             ],
//             [
//                 'id' => 5,
//                 'name' => 'Zakat Fitrah',
//                 'category' => 'wajib',
//                 'date' => '2025-05-17'
//             ],
//         ]
//     ]);
// });

