<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiBaseController;

/**
 * @group Authentication Management
 *
 * User authentication and account settings.
 *
 * Class AuthenticationController
 * @package App\Http\Controllers\Api
 */

class AuthenticationController extends Controller
{
    use ApiBaseController;




    /**
     * Login a User
     *
     * Authenticates a user.
     *
     * @bodyParam email string required The email of the user. Example: mail@mail.com
     * @bodyParam password string required The password of the user.
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "id": 1,
     * "name": "Jane Doe",
     * "email": "jane@doe.com",
     * "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
     *  }
     * }
     *
     * @response 404 {
     *  "error": {
     *  "code": 422,
     *  "message": "Invalid credentials."
     *   }
     *}
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    //function for the authentication of the user credentials via the api.
    public function loginUser(Request $request)
    {
        //validate credentials
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //validate credentials.
//        $validator = $request->validate([
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }

        //extract credentials
        $credentials = $request->only(['email', 'password']);

        //attempt login, if successful, send back response
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            //data to be sent back
            $data = $this->generateUserData($user);
            return $this->sendSuccessResponse($data);
        }

        //if authentication fails, send error response
        return $this->sendErrorResponse("Invalid credentials.");
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
        $data['name'] = $user->fname . " " .$user->lname;
        $data['email'] = $user->email;
        $data['token'] = $user->createToken(env('APP_NAME'))->accessToken;
        return $data;
    }
}
