@extends('layout.app')
@section('content')
    <div class="row">
            <div class="col-xl-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-md-end flex-wrap">
                    <p class="card-title">Purchase History</p>
                    <div class="dropdown mb-3 mb-md-0">
                      <button class="btn btn-sm btn-outline-light dropdown-toggle" type="button" id="dropdownMenuDate1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        2018
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate1">
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2018</a>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table tickets-table mb-2">
                      <thead>
                        <th class="text-muted pl-0">
                            OR #
                        </th>
                        <th></th>
                        <th class="text-muted">
                          Date Purchase
                        </th>
                        <th class="text-muted">
                          Ticket Numbers
                        </th>
                      </thead>
                      <tbody>
                      @foreach($pucrhase_history as $history)
                            <tr>
                            <td class="pl-0">
                                <div class="icon-rounded-primary icon-rounded-md">
                                <h4 class="font-weight-medium">OR</h4>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">ORDX-{{ $history->id }}</p>
                                <p class="text-muted mb-0">$ {{ $history->ticket_price }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ date('F d , Y', strtotime($history->ticket_price)) }}</p>
                                <p class="text-muted mb-0">{{ date('h:s A', strtotime($history->ticket_price)) }}</p>
                            </td>
                            <td>
                                <p class="mb-0">{{ $history->ticket_number }}</p>
                                <p class="text-muted mb-0"></p>
                            </td>
                            <td class="pr-0">
                                <i class="mdi mdi-dots-horizontal icon-sm cursor-pointer"></i>
                            </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {{ $pucrhase_history->links() }}
                </div>  
              </div>
            </div>
            
          </div>
@endsection