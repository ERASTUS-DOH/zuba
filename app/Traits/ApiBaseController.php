<?php


namespace App\Traits;
use App\Owners;
use App\Riders;
use App\User;


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



    /**
     * @param User $user
     * @return array
     *
     */
    public function generateUserData(User $user)
    {
        $data = array();
        $data['id'] = $user->id;
        $data['fname'] = $user->fname;
        $data['lname'] = $user->lname;
        $data['other_name'] = $user->other_name;

        $data['email'] = $user->email;
//        $data['password'] = $user->password;
        $data['token'] = $user->createToken(env('APP_NAME'))->accessToken;
        return $data;
    }


    /**
     * @param Owners $owner
     * @return array
     *
     */
    public function generateOwnerData(Owners $owner)
    {
        $data = array();
        $data['id'] = $owner->id;
        $data['title'] = $owner->title;
        $data['fname'] = $owner->fname;
        $data['lname'] = $owner->lname;
        $data['other_names'] = $owner->other_name;
        $data['address'] = $owner->address;
        $data['telephone'] = $owner->telephone;
        $data['email'] = $owner->email;
        $data['token'] = $owner->createToken(env('APP_NAME'))->accessToken;
        return $data;
    }



    /**
     * @param Riders $rider
     * @return array
     *
     */
    public function generateRiderData(Riders $rider)
    {
        $data = array();
        $data['id'] = $rider->id;
        $data['title'] = $rider->title;
        $data['fname'] = $rider->fname;
        $data['lname'] = $rider->lname;
        $data['other_names'] = $rider->other_name;
        $data['telephone'] = $rider->telephone;
        $data['address'] = $rider->address;
        $data['email'] = $rider->email;
        $data['token'] = $rider->createToken(env('APP_NAME'))->accessToken;
        return $data;
    }
}
