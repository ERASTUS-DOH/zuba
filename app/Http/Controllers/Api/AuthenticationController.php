<?php

namespace App\Http\Controllers\Api;

use App\Owners;
use App\User;
use App\Riders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
     * Register a User
     *
     * Registers a user as an entrepreneur or investor.
     *
     * @bodyParam first_name string required The first name of the user. Example: Jane
     * @bodyParam last_name string required The last name of the user. Example: Doe
     * @bodyParam email string required The email of the user. Example: mail@mail.com
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The password confirmation for the password.
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "id": 1,
     * "first_name": "Jane",
     * "last_name": "Doe",
     * "email": "jane@doe.com",
     * "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
     *    }
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerUser(Request $request)
    {
        //validate credentials
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'other_name' => 'string|max:255',
            'telephone' => 'numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }


        //create the user
        $user = User::query()->create([
            'fname' => $request->input('first_name'),
            'lname' => $request->input('last_name'),
            'other_name' => $request->input('other_name'),
            'telephone' => $request->input('telephone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);


        //data to be sent back
        return $this->sendSuccessResponse($this->generateUserData($user));
    }


    /**
     * Login a Owner
     *
     * Authenticates the BinOwner.
     *
     * @bodyParam email string required The email of the binOwner. Example: mail@mail.com
     * @bodyParam password string required The password of the binOwner.
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
    public function loginOwner(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }

        //extract the login credentials
        $credentials = $request->only(['email', 'password']);


        if (Auth::guard('owner')->attempt($credentials)) {
            $owner = Auth::guard('owner')->user();
            //data to be sent back
            $data = $this->generateOwnerData($owner);
            return $this->sendSuccessResponse($data);
        }

        //if authentication fails, send error response
        return $this->sendErrorResponse("Invalid credentials.");
    }


    /**
     * Register a User
     *
     * Registers a user as an entrepreneur or investor.
     *
     * @bodyParam first_name string required The first name of the user. Example: Jane
     * @bodyParam last_name string required The last name of the user. Example: Doe
     * @bodyParam email string required The email of the user. Example: mail@mail.com
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The password confirmation for the password.
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "id": 1,
     * "first_name": "Jane",
     * "last_name": "Doe",
     * "email": "jane@doe.com",
     * "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
     *    }
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerOwner(Request $request)
    {
        //validate credentials
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'other_name' => 'string|max:255',
            'telephone' => 'numeric|max:255',
            'address' => 'string',
            'email' => 'required|email|max:255|unique:owners',
            'password' => 'required|min:8'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }


        //create the user
        $owner = Owners::query()->create([
            'fname' => $request->input('first_name'),
            'lname' => $request->input('last_name'),
            'other_name' => $request->input('other_name'),
            'telephone' => $request->input('telephone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        //data to be sent back
        return $this->sendSuccessResponse($this->generateOwnerData($owner));
    }


    /**
     * Login a Tricycle Rider
     *
     * Authenticates a Tricycle Rider.
     *
     * @bodyParam email string required The email of the Tricycle Rider. Example: mail@mail.com
     * @bodyParam password string required The password of the Tricycle Rider.
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
    public function loginRider(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }

        //extract the login credentials
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('rider')->attempt($credentials)) {
            $owner = Auth::guard('rider')->user();
            //data to be sent back
            $data = $this->generateRiderData($owner);
            return $this->sendSuccessResponse($data);
        }

        //if authentication fails, send error response
        return $this->sendErrorResponse("Invalid credentials.");
    }


    /**
     * Register a User
     *
     * Registers a user as an entrepreneur or investor.
     *
     * @bodyParam first_name string required The first name of the user. Example: Jane
     * @bodyParam last_name string required The last name of the user. Example: Doe
     * @bodyParam email string required The email of the user. Example: mail@mail.com
     * @bodyParam password string required The password of the user.
     * @bodyParam password_confirmation string required The password confirmation for the password.
     *
     * @response 200 {
     * "success": {
     * "code": 200,
     * "message": "Request completed successfully."
     * },
     * "data": {
     * "id": 1,
     * "first_name": "Jane",
     * "last_name": "Doe",
     * "email": "jane@doe.com",
     * "token": "7geRI9P4LUFj3ensaxOV070Uk1yXeQ23ptqerJYc"
     *    }
     * }
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerRider(Request $request)
    {
        //validate credentials
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'other_name' => 'string|max:255',
            'telephone' => 'numeric|max:255',
            'address' => 'string',
            'email' => 'required|email|max:255|unique:riders',
            'password' => 'required|min:8'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }


        //create the user
        $user = Riders::query()->create([
            'fname' => $request->input('first_name'),
            'lname' => $request->input('last_name'),
            'other_name' => $request->input('other_name'),
            'telephone' => $request->input('telephone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        //data to be sent back
        return $this->sendSuccessResponse($this->generateRiderData($user));
    }

}
