<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\PersonalData;
use Laravel\Socialite\Facades\Socialite;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'reference_work_unit_id' => 'required',
        //     'personal_data_id' => 'required',
        //     'registration_number' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        //     'password_verification' => 'required|same:password',
        //     'role_id' => 'required'
        // ]);
        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors());       
        // }
   
        // $input = $request->all();
        // $input['password'] = Hash::make($input['password']);
        
        // $user = User::create($input);
        
        // $success["name"] = $user->name;
        // $success["email"] = $user->email;
        // $success["role_id"] = $user->role_id;
        // $success["token"] = $user->createToken("clien_secret")->plainTextToken;
   
        // return $this->sendResponse($success, 'User register successfully.');

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'id_number' => ['required', 'unique:personal_datas'],
            'birth_place' => ['required'],
            'birth_date' => ['required'],
            'phone_number' => ['required'],
            'gender' => ['required'],
            'password' => ['required'],
            'password_verification' => ['required', 'same:password'],
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $personalData = new PersonalData();
        $personalData->name = $request->name;
        $personalData->id_number = $request->id_number;
        $personalData->birth_place = $request->birth_place;
        $personalData->birth_date = $request->birth_date;
        $personalData->phone_number = $request->phone_number;
        $personalData->gender = $request->gender;
        if($personalData->save()) {
            $user = new User();
            $user->registration_number = $personalData->id_number;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->personal_data_id = $personalData->id;
            $user->role_id = Role::where('name', 'Publik')->first()->id;
            if($user->save()) {
                return $this->sendResponse($user->id, 'Success');
            }
        }
        return $this->sendError('error.',['error'=>'Error']);
    }
}
