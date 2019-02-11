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
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">BUY  TICKET</span></button>
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
                                    <h4 class="content-color-primary mb-0">MY TICKETS</h4>
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
                                        <th>Ticket Number </th>
                                        <th>Purchase Date</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $data)
                                    <tr class="odd">
                                        <td>{{ $data->ticket_number }}</td>
                                        <td>{{ $data->created_at }}</td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>
            </div>


    <!-- modal for create form -->
    <div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="createOrderTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" id="createOrderTitle">
                    <div class="col text-center">
                        <img src="img/logo.png" alt="" class="mt-4">
                        <br>
                        <h5 class="mt-4 text-info">Set Result </h5>
                        <p class="text-info"></p>
                    </div>
                    <button type="button" class="close absolute" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="depositForm">
                        @csrf
                         <div class="form-group">
                            <label for="">Amount </label>
                            <input type="number" class="form-control" name="number">
                         </div>
                         <span id="detail">
                             <div class="form-group">
                                 <label for="">Deposit Address</label>
                                 <input type="text" class="form-control" id="addr">
                             </div>
                             <div class="form-group">
                                 <label for="">Amount</label>
                                 <input type="text" class="form-control" id="amount">
                             </div>
                        </span>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal for create form ends-->


@endsection
@section('script')
<!-- DataTable jquery file -->
<script src="userpanel/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
<script src="userpanel/vendor/footable-bootstrap/js/footable.min.js"></script>
<script src="userpanel/js/dashboard.js"></script>
<script>
        "use strict"
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
</script>
<script>
    $(function(){

            $('#buyTicket').submit(function(e){

                 e.preventDefault()
                $('#btn_submit').html('<i class="fa fa-spin fa-spinner"></i>');
                $('#btn_submit').attr('disabled',true);
                $.ajax({
                     type: 'POST',
                        url: "{{ url('/') }}/buyticket",
                        data: $(this).serialize(),
                        success: function (data) {
                                if(data.msg_type !="error") {
                                }
                                 $.toast({
                                    heading: data.heading,
                                    text: data.msg,
                                    position: 'top-right',
                                    showHideTransition: 'plain',
                                    icon: data.icon
                                });
                                
                                 $('#btn_submit').html('Buy');
                                 $('#btn_submit').attr('disabled',false);
                        },
                        error: function(error) {
                                    console.log(error);
                                    $.toast({
                                            heading: 'Error',
                                            text: error.statusText,
                                            position: 'top-right',
                                            showHideTransition: 'plain',
                                            icon: 'error'
                                        });

                                    $('#btn_submit').html('Buy');
                                    $('#btn_submit').attr('disabled',false);
                                }
                    });
            });

    });
</script>
<script>
    $(function(){
            $('#detail').hide();
            $('#depositForm').submit(function(e){

                 e.preventDefault()
                $('#btn_submit').html('<i class="fa fa-spin fa-spinner"></i>');
                $('#btn_submit').attr('disabled',true);
                $.ajax({
                     type: 'POST',
                        url: "{{ url('/') }}/deposit/create",
                        data: $(this).serialize(),
                        success: function (data) {
                                if(data.msg_type !="error") {
                                }
                                 $.toast({
                                            heading: data.heading,
                                            text: data.msg,
                                            position: 'top-right',
                                            showHideTransition: 'plain',
                                            icon: data.icon
                                });
                                $('#detail').show();
                                $('#addr').val(data.address);
                                $('#amount').val(data.amount);
                                $('#btn_submit').html('Submit');
                                $('#btn_submit').attr('disabled',false);
                        },
                        error: function(error) {
                                    console.log(error);
                                    $.toast({
                                            heading: 'Error',
                                            text: error.statusText,
                                            position: 'top-right',
                                            showHideTransition: 'plain',
                                            icon: 'error'
                                        });

                                         $('#btn_submit').html('Buy');
                                         $('#btn_submit').attr('disabled',false);
                                }
                    });
            });

    });
</script>

@endsection