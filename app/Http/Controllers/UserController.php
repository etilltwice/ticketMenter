<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllUserNameResource;
use App\Http\Resources\UserAcountResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userPage(Request $request)
    {
        $result = DB::table('users')->where('id', $request->user_id)->first();

        return new UserAcountResource($result);
        // return $result->name;
    }

    /**
     * ユーザー名を全て一覧で取得する関数
     *
     * @param Request $request
     * @return void
     */
    public function userName(Request $request)
    {
        $result = DB::table('users')->get();

        return AllUserNameResource::collection($result);
    }
}
