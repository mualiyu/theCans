<?php

use Livewire\Volt\Component;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

new class extends Component {

    public $customer_name;
    public $customer_email;
    public $contactMessage;
    public $agreed = false;

    public $res = "";


    protected $rules = [
        'customer_name' => 'required|string|max:255',
        'customer_email' => 'required|email|max:255',
        'contactMessage' => 'required',
    ];

    public function submitForm()
    {
        // placeholder('<div>Loading...</div>');

        $this->validate();

        // Handle form submission, e.g., save the comment to the database
        try {
            //code...
            Mail::to(env('SYSTEM_EMAIL'))->send(new ContactUs($this->customer_name, $this->customer_email, $this->contactMessage));
            $this->res = "Comment posted successfully!";
        } catch (\Throwable $th) {
            $this->res = "Failed to post Comment! Try Again.";
        }

        sleep(4);

        // Optionally reset form fields after submission
        $this->reset(['customer_name', 'customer_email', 'contactMessage']);

        // $this->notify('Comment posted successfully!');
    }
}; ?>

<div>
    @if (!$res == "")
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="fw-semibold">Success:</span> {{$res}}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form class="row g-4 needs-validation p-2 mt-0" wire:submit.prevent="submitForm" novalidate>
        <div class="col-sm-6">
            <label class="form-label fs-base" for="name">Name</label>
            <input wire:model="customer_name" class="form-control form-control-lg" type="text" placeholder="Your name"
                required id="name">
            <div class="invalid-feedback text-red-800">Please enter your name!</div>
            @error('customer_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-6">
            <label class="form-label fs-base" for="email">Email</label>
            <input wire:model="customer_email" class="form-control form-control-lg" type="email"
                placeholder="Email address" required id="email">
            <div class="invalid-feedback text-red-800">Please provide a valid email address!</div>
            @error('customer_email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="col-sm-12">
            <label class="form-label fs-base" for="contactMessage">How can we help?</label>
            <textarea wire:model="contactMessage" class="form-control form-control-lg" rows="5"
                placeholder="Enter your message here..." required id="contactMessage"></textarea>
            <div class="invalid-feedback text-red-800">Please enter your contactMessage!</div>
            @error('contactMessage') <span class="error">{{ $contactMessage }}</span> @enderror
        </div>
        {{-- <div class="col-sm-12">
            <div class="form-check form-check-inline">
                <input class="form-check-input" wire:model="agreed" type="checkbox" id="agree">
                <label class="form-check-label" for="agree">I agree to the <a
                        class="nav-link d-inline fs-normal text-decoration-underline p-0" href="#">Terms &amp;
                        Conditions</a></label>
            </div>
            @error('agreed') <span class="error">{{ $message }}</span> @enderror
        </div> --}}
        <div class="col-sm-12 pt-2">
            <button class="btn btn-lg btn-primary" type="submit">Send a request</button>
        </div>
    </form>
</div>
