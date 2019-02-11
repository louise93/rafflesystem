@extends('layout.app')
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1 text-info"> TICKET # {{ $ticket->ticket_id }} - {{ $ticket->title }}</h4>
                  </div>
                </div>
            </div>
          </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    @include('includes.flash')
                    <div class="ticket-info">
                      <p>Ticket Issue : </p>
                        <hr>
                        <address class="text-success">{{ $ticket->message }}</address>
                        <hr>
                        <p>Category: {{ $category->name }}</p>
                        <p>
                        @if ($ticket->status === 'Open')
                            Status: <span class="badge badge-success badge-fw">{{ $ticket->status }}</span>
                        @else
                            Status: <span class="badge badge-danger badge-fw">{{ $ticket->status }}</span>
                        @endif
                        </p>
                        <p>Created on: {{ $ticket->created_at->diffForHumans() }}</p>
                    </div>
                    <hr>
                    <ul class="list-unstyled">
                        @foreach ($comments as $comment)
                        <li class="media">
                           <img class="mr-3" src="https://via.placeholder.com/40x40" alt="Generic placeholder image">
                            @if($comment->user->name == Auth::user()->name)
                           <div class="media-body text-success">
                            <h5 class="mt-0 mb-1">  {{ $comment->user->name }} </h5>
                              {{ $comment->comment }}<br>
                              <small>  {{ $comment->created_at->format('F d, Y h:s A') }}</small>
                            </div>
                            @else
                            <div class="media-body text-warning" style="font-style:italic;">
                             <h5 class="mt-0 mb-1">  {{ $comment->user->name }} </h5>
                               {{ $comment->comment }}<br>
                               <small>  {{ $comment->created_at->format('F d, Y h:s A') }}</small>
                             </div>
                            @endif
                        </li>
                          @endforeach
                      </ul>
                        @if ($ticket->status === 'Open')
                          <div class="comment-form">
                              <form action="{{ url('comment') }}" method="POST" class="form">
                                  {!! csrf_field() !!}

                                  <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                                  <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                    <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                      @if ($errors->has('comment'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('comment') }}</strong>
                                          </span>
                                      @endif
                                  </div>

                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                              </form>
                            </div>
                      @endif
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('template/js/data-table.js')}}"></script>
@endsection
