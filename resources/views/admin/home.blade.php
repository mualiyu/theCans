@extends('layouts.index')

@section('content')
<!-- Page content-->
<div class="col-lg-9 pt-4 pb-2 pb-sm-4">
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h2 mb-4 mb-sm-0 me-4">Hi 👋 {{explode(' ', Auth::user()->name)[0]}}, Welcome Back</h1>
        <div class="d-flex ms-auto">
          {{-- <button class="btn btn-secondary me-3 me-sm-4" type="button">
            <i class="ai-download me-2 ms-n1"></i>
            Download
          </button> --}}
          {{-- <select class="form-select">
            <option value="Last week">Last week</option>
            <option value="Last month">Last month</option>
            <option value="Last 3 months">Last 3 months</option>
            <option value="Last 6 months">Last 6 months</option>
            <option value="Last year">Last year</option>
          </select> --}}
        </div>
      </div>
  <!-- Basic info-->
  <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">

        <div class="row g-3 g-xl-4 mb-10 py-3">
            <div class="col-md-4 col-sm-6">
                <div class="h-100 bg-secondary rounded-3 text-center p-4">
                    <h2 class="h6 pb-2 mb-1">News</h2>
                    <div class="h2 text-primary mb-2">{{count($news)}}</div>
                    {{-- <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p> --}}
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="h-100 bg-secondary rounded-3 text-center p-4">
                    <h2 class="h6 pb-2 mb-1">Bookings</h2>
                    <div class="h2 text-primary mb-2">--</div>
                    {{-- <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p> --}}
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="h-100 bg-secondary rounded-3 text-center p-4">
                    <h2 class="h6 pb-2 mb-1">Available Spaces</h2>
                    <div class="h2 text-primary mb-2">{{count($availableSpaces)}}</div>
                    {{-- <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p> --}}
                </div>
            </div>
        </div>


          <div class="row g-4 py-4">

            <!-- Sales value line chart -->
            <div class="col-md-8">
              <div class="h-100 border rounded-3 p-4">
                <h2 class="h6 text-center text-sm-start mb-4">Bookings</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Space</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>


            <?php $a=1;?>
                {{-- @if (count($jobs) > 0)
                    @foreach ($jobs as $j)
                        <tr>
                            <td>{{$j->name}}</td>
                            <td>{{date('M d, Y', strtotime($j->open_date))}}</td> //space
                            <td>
                                @if ($j->status == 'Open')
                                    <span class="badge  fs-xs border bg-primary text-white">Open</span>
                                @elseif ($j->status == 'Draft')
                                    <span class="badge  fs-xs border bg-warning text-white">Draft</span>
                                @elseif ($j->status == 'Closed')
                                    <span class="badge text-nav fs-xs border bg-danger">Closed</span>
                                @endif
                            </td>
                            <td>
                                <a onclick="event.preventDefault(); window.location.href='/admin/jobs/{{$j->id}}/job-info';" class="nav-link text-default fs-sm fw-normal text-primary py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="View">
                                    View
                                </a>
                                <a onclick="event.preventDefault(); window.location.href='/admin/jobs/{{$j->id}}/edit-job';" class="nav-link text-default fs-sm fw-normal text-info py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="View">
                                    Edit
                                </a>
                            </td>
                        </tr>

                    @endforeach
                @else
                    <div class=" mb-0" style="text-align: center">
                      <h5>No Jobs Yet</h5>
                    </div>
                @endif --}}
                </tbody>
                </table>
            </div>
              </div>
            </div>

            <!-- Country sales -->
            <div class="col-md-4">
              <div class="h-100 border rounded-3 p-4">
                <h2 class="h6 text-center text-sm-start mb-4">Top Sales</h2>
                <div class="d-flex justify-content-between text-body-secondary fs-sm">
                  <span>Space</span>
                  <span>Value</span>
                </div>
                @if (count($spaces)>0)
                @foreach ($spaces as $s)
                <div class="mt-3">
                <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                  <img src="{{$s->image}}" width="16" alt="USA">
                  <span class="ms-2">{{$s->name}}</span>
                  <span class="ms-auto">₦{{$s->price_monthly}}</span>
                </div>
                <div class="progress" style="height: 3px;">
                  <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                </div>
                @endforeach
                @else

                @endif

                {{-- <div class="mt-3">
                  <div class="d-flex align-items-center fs-sm text-dark pb-1 mb-2">
                    <img src="{{asset('assets/img/imagesa/logo.svg')}}" width="16" alt="Sweden">
                    <span class="ms-2">Hot Desk</span>
                    <span class="ms-auto">₦218</span>
                  </div>
                  <div class="progress" style="height: 3px;">
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>

    </div>
  </section>

  <!-- Orders-->
  {{-- <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
    <div class="card-body">
      <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
        <h2 class="h4 mb-0">Jobs</h2>
      </div>
         <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Open</th>
                        <th>Close</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
        <?php $a=1;?>
            @if (count($jobs) > 0)
                @foreach ($jobs as $j)
                    <tr>
                        <td>{{$j->name}}</td>
                        <td>
                            @if ($j->status == 'Open')
                                <span class="badge  fs-xs border bg-primary text-white">Open</span>
                            @elseif ($j->status == 'Draft')
                                <span class="badge  fs-xs border bg-warning text-white">Draft</span>
                            @elseif ($j->status == 'Closed')
                                <span class="badge text-nav fs-xs border bg-danger">Closed</span>
                            @endif
                        </td>
                        <td>{{date('M d, Y', strtotime($j->open_date))}}</td>
                        <td>{{date('M d, Y', strtotime($j->close_date))}}</td>

                        <td>
                            <a onclick="event.preventDefault(); window.location.href='/admin/jobs/{{$j->id}}/job-info';" class="nav-link text-default fs-sm fw-normal text-primary py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="View">
                                View
                            </a>
                            <a onclick="event.preventDefault(); window.location.href='/admin/jobs/{{$j->id}}/edit-job';" class="nav-link text-default fs-sm fw-normal text-info py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="tooltip" aria-label="View">
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <div class=" mb-0" style="text-align: center">
                  <h5>No Jobs Yet</h5>
                </div>
            @endif
            </tbody>
            </table>
        </div>
    </div>
  </section> --}}
</div>
@endsection
