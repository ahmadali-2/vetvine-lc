@extends('vetvineUsers.dashboard_master')
@section('dashboardcontent')

<section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
</section>
<div class="container">
    <div class="plans-main">
        <div class="row">
          <div class="topics-section col-lg-12 ">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Status</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($events as $key=>$event)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $event->buyevents->event_title }}</td>
                            <td>{!! $event->buyevents->event_description !!}</td>
                            <td>{{ $event->created_at->diffForHumans() }}</td>
                            <td>{{ $event->status }}</td>
                            <td>{{ $event->amount }}</td>
                      </tr>
                    @empty
                        <tr>
                            <td>
                                <p>Record Not Found</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
              </table>
          </div>
      </div>
        </div>
  </div>
  <div class="row">
    <div class="col-md-12">
        {{ $events->links(); }}
    </div>
  </div>
</div>
@endsection
