<?php

namespace App\Mail;

use App\Models\Emploi;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $emploi, $cv_path;

    public function __construct(Emploi $emploi, $cv_path)
    {
        $this->emploi = $emploi;
        $this->cv_path = $cv_path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user-created-mail')
                    ->subject('Nouveau postulant')
                    ->attachFromStorage($this->cv_path);
    }
}
