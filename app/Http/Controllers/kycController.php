<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kyc;
use Illuminate\Support\Facades\Hash;
use voku\helper\ASCII;

class kycController extends Controller
{
    public function kyc(Request $r){
        $user = Kyc::all();

        // return $r;

        $r->validate([
            'name'=>'required',
            'email'=>'required|email',
            'cname'=>'required',
            'gender'=>'required',
            'dob'=>'required ',
            'mobile'=> 'required',
            'doc'=>'required',
            'file'=> 'required',
            'address'=>'required',
            'state'=>'required',
            'country'=> 'required'
        ]);


        $k=new Kyc();
        $k->pname=$r->name;
        $k->email=$r->email;
        $k->cname=$r->cname;
        $k->email=$r->email;
        $k->date=$r->dob;
        $k->mobile=$r->mobile;
        $k->doc_name=$r->doc;
        $k->pan = $r->pan;
        $k->gender = $r->gender;
        $k->doc_file=Hash::make($r->file);
        $k->address=$r->address;
        $k->state=$r->state;
        $k->country=$r->country;
        $k->save();
        return redirect('login');
    }
}
