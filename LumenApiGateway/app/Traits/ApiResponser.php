<?php
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Build success Response
     * @param string/array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'appliation/json');
    }

    /**
     * Build error Response
     * @param string/array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

      /**
     * Build error Response
     * @param string/array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorMessage($message, $code)
    {
        return response($message, $code)->header('Content-Type', 'appliation/json');
    }
    
}