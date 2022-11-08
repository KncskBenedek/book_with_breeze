<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LendingController extends Controller
{

    public function show($user_id, $copy_id, $start)
    {
        $lending = Lending::where('user_id','=',$user_id)->where('copy_id','=',$copy_id)->where('start','=',$start)->get();
        return $lending[0];
    }
    function teszt()
    {
        return Lending::where('user_id','=','3')->where('copy_id','=','2')->get();
    }

}
