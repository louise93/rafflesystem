@extends('layouts.app')
<link rel="stylesheet" href="userpanel/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
@section('page_title')
    
 <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">{!! $title !!}</h2>
                            <p class="content-color-secondary page-sub-title">{!! $slogan  !!}</p>
                        </div>
                        @if($button)
                        <div class="col-auto">
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">BUY TICKET</span></button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('content')
        <div class="row">
        <div class="col-sm-12">
                    <div class="card mb-4 fullscreen ">
                        <div class="card-header ">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Transaction Logs</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table " id="dataTables-example">
                                <thead>
                                    <tr>
                            
                                        <th>Transaction Date</th>
                                        <th>Action Taken</th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <tr class="odd"  v-for="history in history">
                                        <td>  @{{ history.created_at }}</td>
                                        <td>@{{ history.action_taken }}</td>
                                      </tr>
                                  
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
    
                <logs v-if="pagination.last_page > 1" :pagination="pagination" :offset="5" @paginate="fetchPosts()"></logs>
            </div>
@endsection

@section('script')
<script src="js/app.js"></script>

@endsection