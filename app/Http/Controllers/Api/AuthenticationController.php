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
                'telephone' =>  'numeric',
                'address' => 'string',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required'
            ]);

            //send validation error response if any
            if ($validator->fails()) {
                return $this->sendErrorResponse($validator->errors()->first());
            }



            //create the user
            $user = User::query()->create([
                'fname' =>$request->input('first_name'),
                'lname' =>$request->input('last_name'),
                'other_name' =>$request->input('other_name'),
                'address' => $request->input('address'),
                'telephone' =>$request->input('telephone'),
                'email' =>$request->input('email'),
                'password' =>Hash::make($request->input('password'))
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
                $owner = Auth::guard('owner')->owner();
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
            'password' => 'required'|'min:8'
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
        return $this->sendSuccessResponse($this->generateUserData($owner));
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
        $data['fname'] = $owner->fname;
        $data['lname'] = $owner->lname;
        $data['other_names'] = $owner->other_name;
        $data['address'] = $owner->address;
        $data['email'] = $owner->email;
        //
        $data['token'] = $owner->createToken(env('APP_NAME'))->accessToken;
        return $data;
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
            $owner = Auth::guard('rider')->rider();
            //data to be sent back
            $data = $this->generateRiderData($owner);
            return $this->sendSuccessResponse($data);
        }



        //if authentication fails, send error response
        return $this->sendErrorResponse("Invalid credentials.");
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
        $data['fname'] = $rider->fname;
        $data['lname'] = $rider->lname;
        $data['other_names'] = $rider->other_name;
        $data['address'] = $rider->address;
        $data['email'] = $rider->email;
        $data['token'] = $rider->createToken(env('APP_NAME'))->accessToken;
        return $data;
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
            'password' => 'required'|'min:8'
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
        return $this->sendSuccessResponse($this->generateUserData($rider));
      }

    }
