<?php

use Livewire\Volt\Component;
use App\Mail\BlogComment;
use \App\Models\NewsComment;

new class extends Component {
    public $news;

    public $customer_name;
    public $customer_email;
    public $comment;

    public $res = "";

    public function mount($news)
    {
        $this->news = $news;
    }

    protected $rules = [
        'customer_name' => 'required|string|max:255',
        'customer_email' => 'required|email|max:255',
        'comment' => 'required|string|max:500',
    ];

    public function submitForm()
    {
        // placeholder('<div>Loading...</div>');

        $this->validate();

        // Handle form submission, e.g., save the comment to the database
        NewsComment::create([
            'news_id' => $this->news->id,
            'customer_name' => $this->customer_name,
            'customer_email' => $this->customer_email,
            'comment' => $this->comment,
        ]);

        try {
            Mail::to(env('SYSTEM_EMAIL'))->send(new BlogComment($this->customer_name, $this->customer_email, $this->comment, $this->news));
            //code...
        } catch (\Throwable $th) {
            // $this->res = "Comment posted successfully!";
        }

        $this->res = "Comment posted successfully!";

        sleep(4);

        // Optionally reset form fields after submission
        $this->reset(['customer_name', 'customer_email', 'comment']);

        // $this->notify('Comment posted successfully!');
    }
}; ?>

<div>
    <div class="card border-0 bg-secondary pt-2 p-md-2 p-xl-3 p-xxl-4 mt-n3 mt-md-0">
        <div class="card-body">
            <h2 class="pb-2 pb-lg-3 pb-xl-4">Leave a comment</h2>
            @if (!$res == "")
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="fw-semibold">Success:</span> {{$res}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form wire:submit.prevent="submitForm" class="row needs-validation g-4" novalidate>
                <div class="col-sm-6">
                    <label class="form-label" for="c-name">Name</label>
                    <input wire:model="customer_name" class="form-control" type="text" placeholder="Your name" required
                        id="c-name">
                    <div class="invalid-feedback text-red-800">Please enter your name!</div>
                    @error('customer_name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-sm-6">
                    <label class="form-label" for="c-email">Email</label>
                    <input wire:model="customer_email" class="form-control" type="email" placeholder="Your email"
                        required id="c-email">
                    <div class="invalid-feedback text-red-800">Please provide a valid email address!</div>
                    @error('customer_email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label class="form-label" for="c-comment">Comment</label>
                    <textarea wire:model="comment" class="form-control" rows="4" placeholder="Type your comment here..."
                        required id="c-comment"></textarea>
                    <div class="invalid-feedback text-red-800">Please enter a comment message!</div>
                    @error('comment') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Post a Comment</button>
                </div>
            </form>
        </div>
    </div>
</div>
