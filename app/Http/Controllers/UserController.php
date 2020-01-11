<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllUserNameCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userName(Request $request)
    {
        $result = DB::table('users')->get();

        return new AllUserNameCollection($result);
        // return "Hello";
    }
}
