<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Url;
use App\Models\User;

new class extends Component {

    public $search = '';


    public function with(): array
    {
        return [
            'users' => User::where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%")
                ->orWhere('phone', 'LIKE', "%{$this->search}%")
                ->orWhere('role', 'LIKE', "%{$this->search}%")
                ->get(),
        ];
    }
}; ?>

<div class="offcanvas-xl offcanvas-start position-absolute position-xl-relative h-100 bg-light rounded-5 border border-xl-0"
    id="contactsList" data-bs-scroll="true" data-bs-backdrop="false">
    <div class="rounded-5 overflow-hidden">
        <div class="card-header w-100 border-0 px-4 pt-4 pb-3">
            <div class="d-flex d-xl-none justify-content-end mt-n2 mb-2">
                <button class="btn btn-outline-secondary border-0 px-3 me-n2" type="button" data-bs-dismiss="offcanvas"
                    data-bs-target=" #contactsList">
                    <i class="ai-cross me-2"></i>
                    Close
                </button>
            </div>
            <div class="position-relative">
                <input class="form-control pe-5" wire:model.live="search" type="text" placeholder="Search by name or anything">
                <i class="ai-search fs-lg text-nav position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
        </div>
        <div class="card-body px-0 pb-4 pb-xl-0 pt-1 simplebar-scrollable-y" data-simplebar="init"
            style="max-height: 700px;">
            <div class="simplebar-wrapper" style="margin: -4px 0px 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: auto; overflow: scroll;">
                            <div class="simplebar-content" style="padding: 4px 0px 0px;">
                                @if (count($users)>0)
                                @foreach ($users as $user)
                                @if ($user->id != Auth::id())
                                <a wire:key="{{ $user->id }}" class="d-flex align-items-center text-decoration-none px-4 py-3" href="{{route('show_single_messages', ['user'=>$user->id])}}">
                                    <div class="position-relative flex-shrink-0 ml-1">
                                        <img class="rounded-circle" src="{{ $user->image ?? url('/storage/admin/default.png')}}" width="48"
                                            alt="Avatar">
                                        {{-- <span
                                            class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                            style="width: .625rem; height: .625rem;"></span> --}}
                                    </div>
                                    <div class="d-flex justify-content-between w-100 ps-2 ms-1 my-0">
                                        <div class="me-3">
                                            <div class="h6 mb-0 mt-2">{{ $user->name }}</div>
                                            {{-- <p class="text-body fs-sm mb-0">
                                                {{substr($message = App\Models\Message::where('receiver_id', $user->id)->where('sender_id', Auth::id())
                                                ->orWhere(['receiver_id' => Auth::id() 'sender_id'=> $user->id])
                                                ->with('sender', 'receiver')
                                                ->orderBy('created_at', 'desc')->get()[0]->message,0,20).'...'  ?? ""}}
                                            </p> --}}
                                        </div>
                                        <div class="text-end">
                                            @if (count($message = App\Models\Message::where(['sender_id'=> Auth::id(), 'receiver_id'=> $user->id])
                                            ->orWhere(['receiver_id' => Auth::id(), 'sender_id'=> $user->id])
                                            ->orderBy('created_at', 'desc')->get())>0)
                                                <span class="d-block fs-xs text-body-secondary">
                                                    {{-- {{date_format($m->created_at,"d M, Y  H:i a")}} --}}
                                                    {{date_format($message = App\Models\Message::where(['sender_id'=> Auth::id(), 'receiver_id'=> $user->id])
                                                                ->orWhere(['receiver_id' => Auth::id(), 'sender_id'=> $user->id])
                                                                ->orderBy('created_at', 'desc')->get()[0]->created_at, "H:i a")}}
                                                </span>
                                            @endif
                                            {{-- Unread --}}
                                            @if (count($message = App\Models\Message::where(['read_at'=>null,'receiver_id' => Auth::id(), 'sender_id'=> $user->id])->orderBy('created_at', 'desc')->get()) > 0)
                                            <span class="badge bg-danger fs-xs lh-1 py-1 px-2">{{count($message = App\Models\Message::where(['read_at'=>null,'receiver_id' => Auth::id(), 'sender_id'=> $user->id])->orderBy('created_at', 'desc')->get())}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                                @endif
                                @endforeach
                                @endif
                                <!-- Contact -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 287px; height: 945px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 518px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
</div>
