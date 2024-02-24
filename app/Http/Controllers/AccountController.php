<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    // Create a user
    public function registration(){
        return view('account.register');
    }

    // Save a user

    public function ProcessRegistration(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required |email|unique:users,email',
            'password'=>'required |min:6|same:confirm_password',
            'confirm_password'=>'required',
        ]);

        if($validator->passes()){

            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->password);

            $newUser->save();

            session()->flash('success',"You have successfully register");



            return response()->json([
                'status'=>true,
                'errors'=>[]
            ]);
        }else{
            return response()->json([
                'status'=>false,
                'errors'=>$validator->errors()
            ]);
        }
    }
    
    public function login(){
        return view('account.login');
    }


}
