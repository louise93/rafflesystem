@extends('layout.app')
@section('content')
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">SEND PAYMENT </h4>

                  <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?=$payment_address?>&choe=UTF-8">

                  <div class="form-group">
                    <label for="">Amount in BTC</label>
                    <input type="number" class="form-control" id="exampleInputUsername1" value="{{ $amount }}">
                  </div>
                  <span id="pay_confirm"></span>
              </div>
            </div>
          </div>
  </div>
@endsection

@section('script')
<script src="{{ asset('template/js/data-table.js')}}"></script>
<script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("pay_confirm").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // document.getElementById("txtHint").innerHTML = this.responseText;
                        console.log(this.responseText);

                        if(this.responseText =='paid') {
                          swal({
                            title: 'Congratulations!',
                            text: 'Payment successfully submitted',
                            icon: 'success',
                            button: {
                              text: "Ok",
                              value: true,
                              visible: true,
                              className: "btn btn-primary"
                            }
                          });

                        }
                        else if(this.responseText =='expired') {

                          swal({
                            title: 'Oops !',
                            text: 'Address expired',
                            icon: 'error',
                            button: {
                              text: "Ok",
                              value: true,
                              visible: true,
                              className: "btn btn-primary"
                            }
                          });

                        }
                        else {
                              document.getElementById('pay_confirm').innerHTML ='<img src="./img/spinner.gif" width="50"><p>Processing . .</p>';
                        }
                    }
                };
                xmlhttp.open("GET","coingatestatus/"+str,true);
                xmlhttp.send();
            }
        }
    </script>
    <script type="text/javascript">

            setInterval(function(){
                const id = "<?=$order_id?>";

                showUser(id);
             }, 3000);


      </script>
@endsection
