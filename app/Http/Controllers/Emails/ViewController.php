<?php

namespace App\Http\Controllers\Emails;

use App\Http\Controllers\Controller;

class ViewController extends Controller {
    public function __invoke()
    {
       return view('emails')
           ->with(['emails'=>auth()->user()->emails()->orderBy('created_at','desc')->paginate(config('app.pagination'))]);
    }
}