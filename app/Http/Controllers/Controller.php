<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class Controller
{
    public function respondWithJson(
        string $message,
        int $statusCode = 200,
        ?array $data = null,
    ): JsonResponse {
        return response()->json([
            'message'     => $message,
            'status_code' => $statusCode,
            'data'        => $data,
        ], $statusCode);
    }
}