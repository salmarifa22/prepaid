<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
class user_controller extends Controller
{
    //
    public function signup(Request $r){
        // return $r;
        $r->validate([
            'name'=>'required',
            'email'=>'required | email',
            'password'=>'required | min:5 | max:10',
            'confirm_password'=>'required_with:password |same:password'
        ]);
        $u=new users();
        $u->name=$r->name;
        $u->gmail=$r->email;
        $u->password=Hash::make($r->password);
        $u->save();
        return redirect('kyc1');

    }
}
