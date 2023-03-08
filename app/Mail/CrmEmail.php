<?php

namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CrmEmail extends Mailable
{
    public $demo;
    public $subject;
    public $view;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo,$subject,$view)
    {
        $this->demo = $demo;
        $this->subject = $subject;
        $this->view = $view;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('vramirez@datacrm.com')
        ->view($this->view)
        ->subject($this->subject)
        //->text('crmmails.demo_plain')
        ->with(
            [
                'testVarOne' => '1',
                'testVarTwo' => '2',
                'testVarTwo' => '3',
            ]);
        // ->attach(public_path('/images').'/demo.jpg', [
        //         'as' => 'demo.jpg',
        //         'mime' => 'image/jpeg',
        // ]);
    }
}
