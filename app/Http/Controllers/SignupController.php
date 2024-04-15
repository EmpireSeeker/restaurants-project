<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SignupController extends Controller
{
    //

    public function __construct(User $user, ){
        $this->user = $user;
    }



    public function act(Request $request){
        $request->password=bcrypt(value: $request->password);
        //dd($request->password);
        $registerdetails=[
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' =>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,

        ];
        $user = new User;
        $user->create($registerdetails);
        return redirect()->route('land');
    }

    public function login (Request $request){
        $details = $request->only('email', 'password');

      if ( Auth::attempt($details)){
        $user=$this->user->where('email', $request->email)->first();

       if ($user->role !=='admin'){
            return view('/userboard');
        }

        return redirect ('/admin');
      }
      else {
        return back()->withError(['password' => 'invalid credential']);
      }
    }

}
