<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Suggestions extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $data;
    public function __construct($data)
    {

//        $data['text'] = $data['message'];
//        unset($data['message']);
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        if (!empty($this->data['file'])) {

        return $this->attach($this->data['file'],
            ['as' => $this->data['file']->getClientOriginalName()])
            ->subject('Հաղորդագրություն pulmonology.am-ից')
            ->view('site.notifications.suggestions', $this->data);
    }else{
            return $this->subject('Հաղորդագրություն pulmonology.am-ից')
                ->view('site.notifications.suggestions', $this->data);
}


//        return $this->subject('Հաղորդագրություն pulmonology.am-ից')->view('site.notifications.suggestions', $this->data);
    }
}
