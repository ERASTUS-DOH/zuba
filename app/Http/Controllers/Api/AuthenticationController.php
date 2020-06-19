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
//use phpseclib\Crypt\Hash;

/**
 * @group Authentication Management
 *
 * User, Bin Owner and Rider authentication and account settings.
 *
 * Class AuthenticationController
 * @package App\Http\Controllers\Api
 */

class AuthenticationController extends Controller
{
    use ApiBaseController;




    /**
     * Login a admin user
     *
     * Authenticates the admin user.
     *
     * @bodyParam email string required The email of the admin user. Example: mail@mail.com
     * @bodyParam password string required The password of the admin user.
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

    //function for the authentication of the admin user credentials via the api.
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
     * Register an admin user
     *
     * Registers an admin user of the platform.
     *
     * @bodyParam first_name string required The first name of the admin user. Example: Jane
     * @bodyParam last_name string required The last name of the admin user. Example: Doe
     * @bodyParam other_name string required The other name of the admin user. Example: Elinam
     * @bodyParam telephone numeric required The telephone number of the admin user. Example: 0241406244
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
     * "other_name": "Elinam",
     * "telephone": "0241406244",
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
                'telephone' =>  'numeric',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required'
            ]);

            //send validation error response if any
            if ($validator->fails()) {
                return $this->sendErrorResponse($validator->errors()->first());
            }



            //create the admin user
            $user = User::query()->create([
                'fname' =>$request->input('first_name'),
                'lname' =>$request->input('last_name'),
                'other_name' =>$request->input('other_name'),
                'telephone' =>$request->input('telephone'),
                'email' =>$request->input('email'),
                'password' =>Hash::make($request->input('password'))
            ]);


            //data to be sent back
            return $this->sendSuccessResponse($this->generateUserData($user));
        }


    /**
     * Login a Bin Owner
     *
     * Authenticates the Bin Owner.
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



        //function to loginOwner through the api.
        public function loginOwner(Request $request){
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
     * Register a Bin Owner
     *
     * Registers a Bin Owner of Whom each bin is supposed to have one.
     *
     * @bodyParam first_name string required The first name of the bin owner. Example: Jane
     * @bodyParam last_name string required The last name of the bin owner. Example: Doe
     * @bodyParam other_name string required The other name of the bin owner. Example: Doe
     * @bodyParam telephone numeric required The telephone number of the bin owner. Example: 0241406244
     * @bodyParam address string required The address of the bin owner. Example: Plt adjacent max-gee hotel.
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
     * "other_name": "Elinam",
     * "telephone": "0241406244",
     * "email": "jane@doe.com",
     * "address": "plt. adjacent max gee hotel",
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
            'telephone' => 'numeric',
            'address' => 'string',
            'email' => 'required|email|max:255|unique:owners',
            'password' => 'required|min:8'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }



        //create the owner
        $owner = Owners::query()->create([
            'fname' =>$request->input('first_name'),
            'lname' =>$request->input('last_name'),
            'other_name' =>$request->input('other_name'),
            'telephone' =>$request->input('telephone'),
            'address' =>$request->input('address'),
            'email' =>$request->input('email'),
            'password' =>Hash::make($request->input('password'))
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

    //function to loginRider through the api.
    public function loginRider(Request $request){
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
     * Register a Rider
     *
     * Registers a Rider as the one responsible for the waste collection.
     *
     * @bodyParam first_name string required The first name of the Rider. Example: Jane
     * @bodyParam last_name string required The last name of the Rider. Example: Doe
     * @bodyParam other_name string required The last name of the Rider. Example: Doe
     * @bodyParam telephone string required The telephone number of the Rider. Example:0244444444
     * @bodyParam email string required The email of the Rider. Example: mail@mail.com
     * @bodyParam address numeric required The address of the Rider. Example: plt. adjacent max-gee hotel.
     * @bodyParam password string required The password of the Rider.
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
     * "other_name": "Elinam",
     * "telephone": "0241406244",
     * "address": "plt. adjacent max-gee hotel",
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
            'telephone' => 'numeric',
            'address' => 'string',
            'email' => 'required|email|max:255|unique:riders',
            'password' => 'required|min:8'
        ]);

        //send validation error response if any
        if ($validator->fails()) {
            return $this->sendErrorResponse($validator->errors()->first());
        }



        //create the rider
        $rider = Riders::query()->create([
            'fname' =>$request->input('first_name'),
            'lname' =>$request->input('last_name'),
            'other_name' =>$request->input('other_name'),
            'telephone' =>$request->input('telephone'),
            'address' => $request->input('address'),
            'email' =>$request->input('email'),
            'password' =>Hash::make($request->input('password'))
        ]);


        //data to be sent back
        return $this->sendSuccessResponse($this->generateRiderData($rider));
      }

    }
