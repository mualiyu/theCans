@extends('layouts.index')

@section('content')
    <!-- Page content-->
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="d-flex align-items-center mb-4">
            <h1 class="h2 mb-0">Chat</h1>
            {{-- <div class="ms-auto">
                <a class="btn btn-sm btn-primary ms-auto" style="float: right;" href="{{ route('show_create_space') }}">Add a
                    New Email</a>
            </div> --}}
        </div>

        <div class="row position-relative overflow-hidden gx-2 z-1">

            <!-- Contacts list -->
            <div class="col-xl-4">
                <livewire:admin.chat_list>
            </div>


            <!-- Chat window -->
            <div class="col-xl-8">
                <div class="card h-100 border-0">

                    <!-- Header -->


                    <!-- Body -->
                    @if ($user)
                    <div class="navbar card-header w-100 mx-0 px-4">
                        <div class="d-flex align-items-center w-100 px-sm-3">
                            <button class="navbar-toggler d-xl-none me-3 me-sm-4" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#contactsList" aria-controls="contactsList"
                                aria-label="Toggle contacts list">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="position-relative flex-shrink-0">
                                <img class="rounded-circle" src="{{$user->image ?? url('/storage/admin/default.png')}}" width="48"
                                    alt="Avatar">
                                <span
                                    class="position-absolute bottom-0 end-0 bg-success border border-white rounded-circle me-1"
                                    style="width: .625rem; height: .625rem;"></span>
                            </div>
                            <div class="h6 ps-2 ms-1 mb-0">{{$user->name ?? ".............."}}</div>
                            <div class="dropdown ms-auto">
                                <button class="btn btn-icon btn-sm btn-outline-secondary border-0 rounded-circle me-n2"
                                    type="button" data-bs-toggle="{{$user ? 'dropdown':''}}" aria-label="Actions">
                                    <i class="ai-dots-vertical fs-4 fw-bold"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end my-1">
                                    <a class="dropdown-item" href="#">
                                        <i class="ai-user fs-base opacity-80 me-2"></i>
                                        View profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="card-body pb-0 pt-4 simplebar-scrollable-y" data-simplebar="init"
                        style="max-height: 580px;">
                        <div class="simplebar-wrapper" style="margin: -24px -38px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 24px 38px 0px;">


                                            {{-- <div class="text-body-secondary text-center mb-4">May 27, 2023</div> --}}
                                            @if (count($messages)>0)
                                            @foreach ($messages as $m)
                                            @if ($m['sender']->id == Auth::id())
                                             <div class="ms-auto mb-3" style="max-width: 392px;">
                                                <div class="d-flex align-items-end mb-2">
                                                    <div class="message-box-end bg-primary text-white">
                                                        @if ($m->type == 'file')
                                                        <img class="mr-5 border border-r-2" src="{{$m->file}}"
                                                            width="100%" alt="{{$m->file}}"> <br>
                                                        @endif
                                                        {{$m->message}}
                                                    </div>
                                                    {{-- <div class="flex-shrink-0 ps-2 ms-1">
                                                        <img class="rounded-circle" src="{{$m->sender->image ?? url('/storage/admin/default.png')}}"
                                                            width="48" alt="Avatar">
                                                    </div> --}}
                                                </div>
                                                <div class="fs-xs text-body-secondary">

                                                    {{date_format($m->created_at,"d M, Y  H:i a")}}
                                                    {{-- 2:18 pm --}}
                                                </div>
                                            </div>
                                            @else
                                            <div class="mb-3" style="max-width: 392px;">
                                               <div class="d-flex align-items-end mb-2">
                                                   {{-- <div class="flex-shrink-0 pe-2 me-1">
                                                       <img class="rounded-circle" src="{{$m->receiver->image ?? url('/storage/admin/default.png')}}"
                                                           width="48" alt="Avatar">
                                                   </div> --}}
                                                   <div class="message-box-start text-dark">
                                                    {{$m->message}}</div>
                                               </div>
                                               <div class="fs-xs text-body-secondary text-end">
                                                <i class="ai-checks text-primary fs-xl mt-n1 me-1"></i>
                                                 {{date_format($m->created_at,"d M, Y  H:i a")}}
                                                </div>
                                           </div>
                                            @endif
                                             @endforeach
                                            @else
                                            <div class="text-body-secondary text-center mb-4">You have'nt started a conversation yet!!</div>
                                            @endif
                                            <!-- Message -->
                                            {{-- <div class="mb-3" style="max-width: 392px;">
                                                <div class="d-flex align-items-end mb-2">
                                                    <div class="flex-shrink-0 pe-2 me-1">
                                                        <img class="rounded-circle" src="assets/img/avatar/19.jpg"
                                                            width="48" alt="Avatar">
                                                    </div>
                                                    <div class="message-box-start text-dark">Thank you for recommending me
                                                        as a designer. I have an interview tomorrow!</div>
                                                </div>
                                                <div class="fs-xs text-body-secondary text-end">11:32 am</div>
                                            </div> --}}

                                            <!-- Message -->
                                            {{-- <div class="ms-auto mb-3" style="max-width: 392px;">
                                                <div class="d-flex align-items-end mb-2">
                                                    <div class="message-box-end bg-primary text-white">Oh no thanks! I just
                                                        know that you are a great specialist!</div>
                                                    <div class="flex-shrink-0 ps-2 ms-1">
                                                        <img class="rounded-circle" src="assets/img/avatar/01.jpg"
                                                            width="48" alt="Avatar">
                                                    </div>
                                                </div>
                                                <div class="fs-xs text-body-secondary">
                                                    <i class="ai-checks text-primary fs-xl mt-n1 me-1"></i>
                                                    2:18 pm
                                                </div>
                                            </div> --}}


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 582px; height: 834px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 403px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                        </div>

                        {{-- Send message section --}}
                        @livewire('admin.send_message', ['user' => $user], key($user->id))

                    @else
                    <div class="card-body pb-0 pt-4 simplebar-scrollable-y" data-simplebar="init"
                    style="max-height: 830px;">
                    <div class="simplebar-wrapper" style="margin: -24px -38px 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="text-body-secondary text-center mb-4 mt-50" style="margin-top:60%;">No conversation sellected</div>

                            <div class="text-body-primary text-center mb-4 mt-50" style="margin-top:60%;">🔒 Your messages are end-to-end encrypted</div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 582px; height: 834px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 403px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                    </div>

                    <div class="card-footer w-100 border-0 mx-0 px-4"></div>
                    @endif



                    {{-- <div class="card-footer w-100 border-0 mx-0 px-4">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$user->id}}" name="receiver_id">

                            <div class="d-flex align-items-end border rounded-3 pb-3 pe-3 mx-sm-3">
                                <textarea class="form-control border-0" rows="2" placeholder="Type a message" name="message" style="resize: none;"></textarea>
                                <div class="nav flex-nowrap align-items-center">
                                    <a class="nav-link text-body-secondary p-1 me-1" id="file-upload-link" href="#" aria-label="Attach">
                                        <i class="ai-paperclip fs-xl"></i>
                                    </a>
                                    <input type="file" id="file-upload-input" name="file" class="d-none">

                                    <button class="btn btn-sm btn-secondary ms-3" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}

                </div>
            </div>
        </div>

    </div>
    @include('layouts.flash')
@endsection

@section('script')
<script>
    document.getElementById('file-upload-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of the link
        document.getElementById('file-upload-input').click(); // Trigger the file input click
    });

    document.getElementById('file-upload-input').addEventListener('change', function(event) {
        // Handle the file upload here
        // For example, you could submit the form or display the selected file name
        const file = event.target.files[0];
        if (file) {
            console.log('File selected:', file.name);
            // You can submit the form here if needed
            // document.getElementById('file-upload-form').submit();
        }
    });
</script>
@endsection
