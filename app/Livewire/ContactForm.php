<?php

namespace App\Livewire;

use App\Enums\Status;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactForm extends Component {

    public $services = [];

    public $name, $email, $phone, $service, $message; 

    public $captcha;

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

    public function updatedCaptcha($token) {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_V3_SECRET_KEY'),
            'response' => $token,
            'remoteip' => request()->ip()
        ]);
    
        $success = $response->json()['success'];
    
        if (! $success) {
            throw ValidationException::withMessages([
                'captcha' => __('Google thinks, you are a bot, please refresh and try again!'),
            ]);
        } else {
            $this->captcha = true;
        }
    }

    function send(){
        $this->reset(['success', 'error']);
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
            $this->error = 'There was a problem sending this message';
            if(app()->hasDebugModeEnabled()) throw $th;
            return;
        }

        $this->reset(['name', 'email', 'phone', 'service', 'message']);

        $this->success = 'Your message has been sent successfully! We will get in touch with you soon';
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
            ->send(User::isAdmin()->get(), ['mail']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
