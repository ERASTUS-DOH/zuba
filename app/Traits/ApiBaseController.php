<?php


namespace App\Traits;


trait ApiBaseController
{
        /**
        * Error response for api calls, default error - 422, is validation error
        * @param string $message
        * @param int $status
        * @return \Illuminate\Http\JsonResponse
        */
            public function sendErrorResponse($message = "An error occurred.", $status = 422) {
                return response()->json(
                    [
                        'error' => [
                            'code' => $status,
                            'message' => $message
                        ]
                    ],
                    $status
                );
            }

            /**
             * Success response for api calls
             * @param $data
             * @param $message
             * @return \Illuminate\Http\JsonResponse
             */
            public function sendSuccessResponse($data = [], $message = "Request completed successfully.") {
                return response()->json(
                    [
                            'success' => [
                            'code' => 200,
                            'message' => $message
                        ],
                        'data' => $data
                    ],
                    200
                );
            }
}
