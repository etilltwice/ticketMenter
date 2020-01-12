<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class UserAcountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $pay = DB::table('tickets')
            ->join('users', 'tickets.menter_id', '=', 'users.id')
            ->where('student_id', $this->id)
            ->select([
                'users.name as name',
                'tickets.content as content',
                'tickets.created_at as time',
                'tickets.status as status'
            ])
            ->get();
        $recieve = DB::table('tickets')
            ->join('users', 'tickets.student_id', '=', 'users.id')
            ->where('menter_id', $this->id)
            ->select([
                'users.name as name',
                'tickets.content as content',
                'tickets.created_at as time',
                'tickets.status as status'
            ])
            ->get();
        return [
            "user_id" => $this->id,
            'name' => $this->name,
            'payList' => PayListResource::collection($pay),
            'receiveList' => PayListResource::collection($recieve)
        ];
    }
}
