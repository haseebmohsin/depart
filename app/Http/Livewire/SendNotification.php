<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SendNotification extends Component
{
    public $message;

    public function sendMessageNotification()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("d6a57e38", "FN7YO7o7ROXpUH2K");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS(
                "923122060531",
                'Depart',
                $this->message
            )
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            session()->flash('success', "The message was sent successfully!");
        } else {
            session()->flash('deny', "The message was not sent!");
        }
    }

    public function render()
    {
        return view('livewire.send-notification');
    }
}
