<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailJob;
use App\Models\Email;
use Illuminate\Console\Command;

class SendEmails extends Command {
    protected $signature = 'send:email';
    
    protected $description = 'Send Emails';
    
    public function handle()
    {
        foreach (Email::whereNull('send_at')->where('is_error','0')->get() as $email){
            $this->info('Sending: '.$email->email);
            dispatch(new SendEmailJob($email->id));
        }
    }
}
