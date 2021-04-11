<?php

namespace App\Http\Controllers\Emails;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailJob;
use App\Models\Email;
use Illuminate\Http\Request;

class SendController extends Controller {
    public function __invoke(Request $request)
    {
        $this->validate($request,[
            'subject'=>'required|string|max:60',
            'email'=>'required|email',
            'body'=>'required|string|max:400',
        ]);
       
        $email=auth()->user()->emails()->save(new Email([
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'body'=>$request->get('body')
        ]));
        
        return redirect()->route('emails');
    }
}