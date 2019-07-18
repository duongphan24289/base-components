<?php

namespace MittoPlus\BaseComponent\Traits;

use Illuminate\Http\JsonResponse;

trait TraitResponse
{
    /**
     * Success Response
     *
     * @param $data
     * @param int $statusCode
     * @return JsonResponse
     */
    public function success($data, $statusCode = 200)
    {
        return response()->json($data, $statusCode);
    }

    /**
     * Error Response
     *
     * @param $error
     * @param $statusCode
     * @return JsonResponse
     */
    public function error($error, $statusCode)
    {
        return response()->json($error, $statusCode);
    }
}