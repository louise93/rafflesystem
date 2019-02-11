@extends('layout.app')
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">ALL TICKETS</h4>
                  </div>
                </div>
            </div>
          </div>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body d-flex">
                <div class="col-md-12">
                    <h4>TICKETS</h4>
                <div class="table-responsive">
                    @include('includes.flash')
                  @if ($tickets->isEmpty())
                          <p>There are currently no tickets.</p>
                      @else
                        <table id="order-listing" class="table">
                          <thead>
                               <tr>
                                   <th>Category</th>
                                   <th>Title</th>
                                   <th>Status</th>
                                   <th>Last Updated</th>
                                   <th style="text-align:center" colspan="2">Actions</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach ($tickets as $ticket)
                               <tr>
                                   <td>
                                   @foreach ($categories as $category)
                                       @if ($category->id === $ticket->category_id)
                                           {{ $category->name }}
                                       @endif
                                   @endforeach
                                   </td>
                                   <td>
                                       <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                           #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                       </a>
                                   </td>
                                   <td>
                                   @if ($ticket->status === 'Open')
                                       <span class="badge badge-success badge-fw">{{ $ticket->status }}</span>
                                   @else
                                       <span class="badge badge-danger badge-fw">{{ $ticket->status }}</span>
                                   @endif
                                   </td>
                                   <td>{{ $ticket->updated_at }}</td>
                                   <td>
                                       <a href="{{ url('tickets/' . $ticket->ticket_id) }}" class="btn btn-primary">Comment</a>
                                   </td>
                                   <td>
                                       <form action="{{ url('admin/close_ticket/' . $ticket->ticket_id) }}" method="POST">
                                           {!! csrf_field() !!}
                                           <button type="submit" class="btn btn-danger">Close</button>
                                       </form>
                                   </td>
                               </tr>
                           @endforeach
                        </table>

                          {{ $tickets->render() }}
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('template/js/data-table.js')}}"></script>
@endsection
