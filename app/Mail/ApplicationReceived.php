<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationReceived extends Mailable {
    use Queueable, SerializesModels;

    public $application;

    public function __construct($application) {
        $this->application = $application;
    }

    public function build() {
        return $this->subject('Application Received - ' . config('app.name'))
            ->markdown('received')
            ->with([
                'application' => $this->application,
            ]);
    }
}