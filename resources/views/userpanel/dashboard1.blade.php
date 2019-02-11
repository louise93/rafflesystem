@extends('layout.app')
@section('style')
  <link rel="stylesheet" href="{{ asset('template/vendors/lightgallery/css/lightgallery.css')}}">
  <style>
    #clockdiv{
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 20px;
      }
    #clockdiv > div{
      padding: 10px;
      border-radius: 3px;
      background: #00BF96;
      display: inline-block;
    }
    #clockdiv div > span{
      padding: 15px;
      border-radius: 3px;
      background: #00816A;
      display: inline-block;
    }
    .smalltext{
      padding-top: 5px;
      font-size: 16px;
    }
  </style>
@endsection
@section('content')
    <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <h4 class="mt-1 mb-1">Hi, Welcomeback!</h4>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-success">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-success icon-rounded-lg">
                      <i class="mdi mdi-arrow-top-right"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Deposit</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$ {{ number_format($total_deposit,2) }}</h3>
                        <small class="mb-0">This month</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-info">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-info icon-rounded-lg">
                      <i class="mdi mdi-basket"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Total Ticket Purchases</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$ {{ number_format($total_purchase,2) }}</h3>
                        <small class="mb-0">This month</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card border-0 border-radius-2 bg-danger">
                <div class="card-body">
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                    <div class="icon-rounded-inverse-danger icon-rounded-lg">
                      <i class="mdi mdi-chart-donut-variant"></i>
                    </div>
                    <div class="text-white">
                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">New Deposit</p>
                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">$ $ {{ number_format($total_deposit_today,2) }}</h3>
                        <small class="mb-0">Today</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
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
            <div class="col-xl-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">DRAW DATE</p>
                   <div id="calendar" class="full-calendar"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 grid-margin">
              <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-baseline flex-wrap">
                        <h2 class="mr-3">TICKET SELLING </h2>
                        <span><p class="mb-0 text-success font-weight-medium"></p></span>
                      </div>
                      <p class="mb-0 text-muted">Remaining time : </p>
                      <center>
                         <div id="clockdiv" >
                              <div>
                                <span class="days"></span>
                                <div class="smalltext">Days</div>
                              </div>
                              <div>
                                <span class="hours"></span>
                                <div class="smalltext">Hours</div>
                              </div>
                              <div>
                                <span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                              </div>
                              <div>
                                <span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                              </div>
                          </div>
                        </center>
                        <br><br>
                          <div class="row">
                               <div class="col-md-12 grid-margin stretch-card">
                              <div class="card border-0 border-radius-2 bg-success">
                                <div class="card-body">
                                  <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                                    <div class="icon-rounded-inverse-info icon-rounded-lg">
                                      <i class="mdi mdi-calendar"></i>
                                    </div>
                                    <div class="text-white">
                                      <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">DRAW DATE</p>
                                      <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                                        <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">{{ date('M d, Y', strtotime($schedule)) }}</h3>
                                        <small class="mb-0">end</small>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>

                    </div>

                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Ticket Sold</p>
                        <canvas id="distribution-chart-dark"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Purchases</p>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-muted mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, quibusdam eum, </p>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="border-top-0">
                          <th class="text-muted">Order #</th>
                          <th class="text-muted">Ticket Numbers</th>
                            <th class="text-muted">Ticket Numbers</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($recent_invoice as $recent_invoice)
                        <tr>
                          <td>ORDX-{{ $recent_invoice->id }}</td>
                          <td>{{ $recent_invoice->ticket_number }}<td>
                          <td>{{ $recent_invoice->ticket_number }}<td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
@endsection

@section('script')
<script src="{{ asset('template/js/dashboard.js')}}"></script>
<script src="{{ asset('template/js/calendar.js')}}"></script>
<script>
      function getTimeRemaining(endtime) {
          var t = Date.parse(endtime) - Date.parse(new Date());
          var seconds = Math.floor((t / 1000) % 60);
          var minutes = Math.floor((t / 1000 / 60) % 60);
          var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
          var days = Math.floor(t / (1000 * 60 * 60 * 24));
          return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
          };
    }

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var daysSpan = clock.querySelector('.days');
      var hoursSpan = clock.querySelector('.hours');
      var minutesSpan = clock.querySelector('.minutes');
      var secondsSpan = clock.querySelector('.seconds');

      function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
          clearInterval(timeinterval);
        }
      }

      updateClock();
      var timeinterval = setInterval(updateClock, 1000);
    }

      var deadline = '<?= $schedule?>';
      initializeClock('clockdiv',deadline);
</script>
@endsection
