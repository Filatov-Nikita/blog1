<?php

namespace App\Listeners;

use App\Events\Feedback;
use App\Mail\FeedbackMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
class SendMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */


    /**
     * Handle the event.
     *
     * @param  Feedback  $event
     * @return void
     */
    public function handle(Feedback $event)
    {
        $data = $event->getInputData();
        Mail::to(env('MAIL_USERNAME'))
            ->send(new FeedbackMail($data));
    }
}
