<?php

use function Livewire\Volt\{state, rules, usesFileUploads, mount};
use App\Models\Message;

state('user');

usesFileUploads();

mount(function ($user) {
    $this->user = $user;
});

state([
    'file',
    'message'=> '',
    'type' => 'txt',
    'receiver_id' => '',
]);

rules(['message' => 'required']);

$submit = function () {
    $this->validate();

    if ($this->file) {
        # code...
        $path = $this->file->store('public/messages');
        $re = explode('/', $path);
        $path = url('/storage/messages').'/'. $re[2];
        $this->type = 'file';
    }else{
        $path = null;
        $this->type = 'txt';
    }

    $msg = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $this->user->id,
            'message' => $this->message,
            'type' => $this->type,
            'file' => $path,
        ]);

    $this->message = '';
    $this->file = [];
};

?>

<div class="card-footer w-100 border-0 mx-0 px-4">
    <form method="POST" enctype="multipart/form-data" wire:submit.prevent="submit">
        @csrf
        <input type="hidden" value="{{$user->id}}" wire:model="receiver_id" name="receiver_id">

        <div class="d-flex align-items-end border rounded-3 pb-3 pe-3 mx-sm-3">
            <textarea class="form-control border-0" rows="2" wire:model="message" placeholder="Type a message" name="message" style="resize: none;"></textarea>
            <div class="nav flex-nowrap align-items-center">
                <a class="nav-link text-body-secondary p-1 me-1" id="file-upload-link" href="#" aria-label="Attach">
                    <i class="ai-paperclip fs-xl"></i>
                </a>
                <input type="file" wire:model="file" id="file-upload-input" name="file" class="d-none">
                {{-- <a class="nav-link text-body-secondary p-1" href="#" aria-label="Emoji">
                    <i class="ai-emoji-smile fs-xl"></i>
                </a> --}}
                <button class="btn btn-sm btn-secondary ms-3" type="submit">Send</button>
            </div>
        </div>
    </form>
</div>

