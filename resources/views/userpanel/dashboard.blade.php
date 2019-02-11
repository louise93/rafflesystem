@extends('layouts.app')

<style type="text/css">

    /* Firefox old*/
@-moz-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}

@-webkit-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
/* IE */
@-ms-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
/* Opera and prob css3 final iteration */
@keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
.blink-image {
    -moz-animation: blink normal 1s infinite ease-in-out; /* Firefox */
    -webkit-animation: blink normal 1s infinite ease-in-out; /* Webkit */
    -ms-animation: blink normal 1s infinite ease-in-out; /* IE */
    animation: blink normal 1s infinite ease-in-out; /* Opera and prob css3 final iteration */
}
.carousel-item {
  height: 250px;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">BUY TICKET</span></button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('content')
        <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('userpanel/img/banner1.jpeg')">
        <div class="carousel-caption d-none d-md-block">
          {{-- <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p> --}}
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('userpanel/img/banner2.gif')">
        <div class="carousel-caption d-none d-md-block">
          {{-- <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p> --}}
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('http://energydiet.canadiangeographic.ca/application/assets/img/2014/challenge_prizes_banner_en.png')">
        <div class="carousel-caption d-none d-md-block">
          {{-- <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p> --}}
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
        </div>
    <br>
    <?php
        $total = count($total_users);
        $sold  = count($ticket);
    ?>
    <balance labels="{{ json_encode(['Tickets Sold',' Remaining Tickets']) }}"
                        data-prop="{{ json_encode([$sold,$total-$sold]) }}"></balance>
                        <div class="row"><br></div>
      <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Today’s Transaction <small class="content-color-secondary float-right mr-2 mt-1"><?=date('F d, Y')?></small></h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <ul class="list-group border-top border-bottom list-group-flush">
                            @foreach ($today as $todays)
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="custom-control custom-checkbox todo-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                            <label class="custom-control-label " for="customCheck1"></label>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0 text-truncated">{{ $todays->action_taken }}</h6>
                                            <p class="small">{{ $todays->created_at }}</p>
                                        </div>
                                        <button class="btn btn-link text-danger todohide"><i class="material-icons">delete</i></button>
                                    </div>
                                </li>
                            @endforeach
                               
                                
                            </ul>
                            <br>
                           <span class="pull-right"> {{ $today->links() }}</span> 
                        </div>
                    </div>
                </div>
      </div>
       

@endsection
 <script type="text/javascript">
    const second        = 1000,
          minute        = second * 60,
          hour          = minute * 60,
          day           = hour * 24;
            let sc      =  "<?=$schedule?>";

            console.log(sc);
          let countDown = new Date(sc  +' 00:00:00').getTime(),
                x = setInterval(function() {
                              let now   = new Date().getTime(),
                              distance  = countDown - now;
                              document.getElementById('days').innerText = Math.floor(distance / (day)) + ' days',
                              document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)) + ' hours',
                              document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)) + ' minutes',
                              document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second) + ' seconds';

                 }, second);
</script>


@section('script')

<script src="js/app.js"></script>
<script src="userpanel/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js"></script>
<script src="userpanel/vendor/footable-bootstrap/js/footable.min.js"></script>
<script src="userpanel/js/dashboard.js"></script>

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
        'use strict'
        $(window).on('load', function() {
            /* footable  */
            $(".footable").footable({
                "paging": {
                    "enabled": true,
                    "position": "center"
                }
            });
        });

    </script>
    <script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date('2018-12-30');

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});
		</script>
@endsection

