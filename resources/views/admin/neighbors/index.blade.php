@extends('layouts.index')

@section('content')
    <!-- Page content-->
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="d-flex align-items-center mb-4">
          <h1 class="h2 mb-0">Neighbors of theCans</h1>
            <div class="ms-auto">
                <a class="btn btn-sm btn-primary ms-auto" style="float: right;" href="{{route('show_create_neighbor')}}">New Neighbor</a>
            </div>
        </div>
        @include('layouts.flash')
      <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
          <div class="card-body">
            {{-- <div class="d-flex align-items-center pb-4 mt-sm-n1 mb-0 mb-lg-1 mb-xl-3">
              <i class="ai-map-pin text-primary lead pe-1 me-2"></i>
              <h2 class="h4 mb-0">neighbors</h2>
            </div> --}}

            <!-- Address (primary) -->
            @if (count($neighbors)>0)
            <?php $g = count($neighbors); ?>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($neighbors as $neighbor)
                <div class="col">
                  <div class="card h-100 rounded-3 p-3 p-sm-4">
                    <div class="d-flex align-items-center pb-2 mb-1">
                      <h3 class="h6 text-nowrap text-truncate mb-0">{{$neighbor->name}} #{{$g}}</h3>
                      <div class="d-flex ms-auto">
                        <a class="nav-link fs-xl fw-normal py-1 pe-0 ps-1 ms-2" href="{{route('show_edit_neighbor', ['neighbor'=>$neighbor->id])}}" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit">
                          <i class="ai-edit-alt"></i>
                        </a>
                        <button onclick="event.preventDefault(); if(window.confirm('Note: If you proceed, this will delete {{$neighbor->name}}. \n\nThank you!')){document.getElementById('delete-form-{{$neighbor->id}}').submit()};"  class="nav-link text-danger fs-xl fw-normal py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="Trash" data-bs-original-title="Delete">
                          <i class="ai-trash"></i>
                        </button>
                        <form id="delete-form-{{$neighbor->id}}" action="{{ route('delete_neighbor', ['neighbor'=>$neighbor->id]) }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </div>
                    </div>
                    <p class="mb-0">Description: {{$neighbor->description}}</p>
                    @if ($neighbor->link)
                    <a href="{{$neighbor->link}}" target="__blank">Link</a>
                    @else
                    <span>No link</span>
                    @endif
                  </div>
                </div>
                <?php $g--; ?>
                @endforeach
            </div>
              @else
              <div class="col">
                <div class="card h-100 justify-content-center align-items-center border-dashed rounded-3 py-5 px-3 px-sm-4">
                  No neighbor yet
                </div>
              </div>
              @endif
            </div>

          </div>
        </section>
    </div>
@endsection
