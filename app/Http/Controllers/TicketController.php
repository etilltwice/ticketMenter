<?php

namespace App\Http\Controllers;

use App\Http\Resources\TicketPayListCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * チケットの作成
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        DB::table('tickets')->insert([
            "menter_id" => $request->menter_id,
            "student_id" => $request->student_id,
            "content" => $request->content,
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        return "succese";
    }

    /**
     * チケットの論理削除
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request)
    {
        DB::table('tickets')
            ->where('ticket_id', $request->ticket_id)
            ->update([
                "status" => false,
                "updated_at" => now(),
            ]);

        return "succese";
    }
}
