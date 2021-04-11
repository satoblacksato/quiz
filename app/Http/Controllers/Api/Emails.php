<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Models\User;

class Emails extends Controller {
    public function __invoke()
    {
        return response()->json(
            Email::with('user')
                ->select('emails.*')
                ->join('users','users.id','=','emails.user_id')
                ->filtersFields()
                ->orderBy('users.created_at','desc')
                ->paginate(config('app.pagination'))
            ,200);
    }
}