<?php

namespace App\Jobs;

use App\Mail\AnnouncementMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $record;
    protected $type;
    /**
     * Create a new job instance.
     */
    public function __construct($user, $record, $type)
    {
        $this->user = $user;
        $this->record = $record;
        $this->type = $type;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mailData = [
            'user' => $this->user,
            'record' => $this->record,
            'type' => $this->type,
        ];
        Mail::to($this->user)->send(new AnnouncementMail($mailData));
    }
}
