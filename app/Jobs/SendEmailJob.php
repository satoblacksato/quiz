<?php

namespace App\Jobs;

use App\Mail\MessageSending;
use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    private $email;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct( $emailId )
    {
        $this->email = Email::findOrFail( $emailId );
    }
    
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Mail::to( $this->email->email )
                ->send( new MessageSending( $this->email->id ) );
            $this->email->send_at=now();
            $this->email->save();
        } catch ( \Exception $e ) {
            $this->email->is_error=true;
            $this->email->error_legend=$e->getMessage();
            $this->email->save();
        }
        
    }
}
