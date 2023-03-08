<?php

namespace App\Mail;
use App\Models\Form;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class verificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $view;
    public $subject;


    function __construct($data, $view, $subject)
    {
        $this->data = $data;
        $this->view = $view;
        $this->subject = $subject;

    }
    
    public function build() 
    {
        return $this->view($this->view)->with([ 
            'data' => $this->data
        ])->from('vramirez@datacrm.com','DataCRM')
        ->subject($this->subject)
        ->replyTo('vramirez@datacrm.com','DataCRM');
    } 

}
