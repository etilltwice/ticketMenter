<?php

namespace App\Http\Controllers;

use App\Http\Resources\TicketPayListCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function payList(Request $request)
    {
        $result = DB::table('tickets')->where('student_id', $request->user_id)->get();

        return new TicketPayListCollection($result);
        // return $result[0]->menter_id;
    }
}
