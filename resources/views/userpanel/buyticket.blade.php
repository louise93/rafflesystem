@extends('layout.app')
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">BUY TICKET, GET A CHANCE TO WIN AWESOME PRIZES</h4>
                  </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-success">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-success icon-rounded-lg">
                      <i class="mdi mdi-arrow-top-right"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Ticket Purchase</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$ {{number_format($total_purchase,2)}}</h3>
                        <small class="mb-0">This month</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-warning">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-warning icon-rounded-lg">
                      <i class="mdi mdi-chart-multiline"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Wallet Balance</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$ {{ number_format($balance,2 )}}</h3>
                        <small class="mb-0">remaining</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body d-flex">
                <div class="col-md-8">
                    <h4>YOUR TICKETS</h4>
                <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr class="bg-dark text-white">
                                <th>Ticket #</th>
                                <th>Ticket Price</th>
                                <th>Date Purchase</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($tickets as $ticket )
                                <tr>
                                    <td>TB-{{ $ticket->ticket_number }}</td>
                                    <td>$20</td>
                                    <td>{{ $ticket->created_at }}</td>

                                </tr>
                             @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                        <h4 class="mt-1 mb-1">BUY NEW TICKET</h4>
                        <br>
                        <buyticket></buyticket>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('template/js/data-table.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
@endsection
