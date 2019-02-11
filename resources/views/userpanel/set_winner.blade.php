@extends('layouts.app')
<link rel="stylesheet" href="userpanel/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
<style>
#output {
    margin: 20px;
    padding: 20px;
    border-radius: 10px;
    font-size: 80px;
    width: 100%;
    color: red;
}
</style>
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
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#result"><i class="material-icons">add</i> <span class="text-hide-xs">DRAW NOW</span></button>
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
                                    <h4 class="content-color-primary mb-0">Result</h4>
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
                                        <th>Draw Date </th>
                                        <th>Winning Number</th>
                                        <th>Lucky Winner</th>
                                        <th>Prize</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $data)
                                    <tr class="odd">
                                        <td>{{ $data->draw_date }}</td>
                                        <td>{{ $data->winning_number }}</td>
                                        <td  class="right">{{ $data->name }}</td>
                                        <td></td>
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
                        <center>
                            <div id="output">--</div>
                        </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_submit" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- modal for create form ends-->


@endsection
@section('script')
<!-- DataTable jquery file -->
<script src="userpanel/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script src="userpanel/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="userpanel/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
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

    $('#btn_submit').on('click' , function() {

        var output, started, duration, desired;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         $.ajax({
                     type: 'POST',
                        url: "{{ url('/') }}/findwinner",
                        data: $(this).serialize(),
                        success: function (data) {
                                  
                                  console.log(data.lucky_number);
                                  desired = data.lucky_number
                        },
                        error: function(error) {
                                    console.log(error);
                        
                                }
                    });

        // Constants
        duration = 5000;
       // desired = '50';

        // Initial setup
        output = $('#output');
        started = new Date().getTime();
        // Animate!
        animationTimer = setInterval(function() {
            // If the value is what we want, stop animating
            // or if the duration has been exceeded, stop animating
            if (output.text().trim() === desired ||  new Date().getTime() - started > duration) {
                clearInterval(animationTimer);
                     output.text(desired);
            } else {
                console.log('animating');
                // Generate a random string to use for the next animation step
                output.text(
                    ''+
                    Math.floor(Math.random() * 20)+
                    Math.floor(Math.random() * 10)
                );
            }
        }, 100);
    });
        
</script>
@endsection