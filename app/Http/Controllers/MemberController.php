<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Salon;

class MemberController extends Controller
{
    public function top(){

        return view('top');
    }


    public function register(){

        return view('register');
    }

    public function memberRegister(Request $request){

        $member = new Member();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->password = $request->password;
        $member->save();

        return redirect('/top');
    }

    public function edit(){

        return view('edit');
    }

 

}
