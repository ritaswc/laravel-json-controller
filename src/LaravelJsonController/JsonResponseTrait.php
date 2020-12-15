<?php

namespace Ritaswc\LaravelJsonController;

trait JsonResponseTrait
{
    protected function apiData($data = [], $message = '', $status = 200, $headers = [], $options = 0): \Illuminate\Http\JsonResponse
    {
        return response()->json(compact('status', 'message', 'data'), 200, $headers, $options);
    }

    protected function apiSuccess($message = 'OK', $status = 200, $headers = [], $options = 0): \Illuminate\Http\JsonResponse
    {
        return $this->apiData([], $message, $status, $headers, $options);
    }

    protected function apiError($message = 'Error', $status = 400, $headers = [], $options = 0): \Illuminate\Http\JsonResponse
    {
        return $this->apiData([], $message, $status, $headers, $options);
    }
}