<?php

namespace App\Livewire;

use App\Enums\Status;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ContactForm extends Component {

    public $services = [];

    public $name, $email, $phone, $service, $message; 

    public $error, $success;

    function mount(){
        $this->services = Service::whereStatus(Status::ACTIVE)->get();
    }

    function rules(){
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => ['nullable', Rule::exists('services', 'id')],
            'message' => ['required', 'string'],
        ];
    }

    function send(){
        $this->validate();

        try {
            $contactMessage = ContactMessage::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'service_id' => $this->service,
                'message' => $this->message
            ]);
    
            $this->sendEmail($contactMessage);
        } catch (\Throwable $th) {
            $this->error = 'There was a problem sending your email';
            if(app()->hasDebugModeEnabled()) throw $th;
            return;
        }

        $this->success = 'Your message has been sent successfully!';
    }

    function sendEmail($contactMessage){
        notify("Attention required: Incoming message from {$contactMessage->name}")
            ->line("A new message has been submitted through the website contact form from {$contactMessage->name}.")
            ->line("Please find the details of the message below:")
            ->line("Sender Name: {$contactMessage->name}")
            ->line("Sender Email Address: {$contactMessage->email}")
            ->line("Selected Service: {$contactMessage->service?->name}")
            ->line("Message: {$contactMessage->message}")
            ->line("Please click the link below to view messages.")
            ->action('View Messages', route('filament.manager.resources.contact-messages.index'))
            ->send(User::isAdmin()->get());
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
