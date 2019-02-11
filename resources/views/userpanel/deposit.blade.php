@extends('layout.app')
@section('content')
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">WALLET DEPOSIT</h4>

                <form class="forms-sample" action="{{ URL::to('deposit/create') }}" method="post">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputUsername1">Amount to Deposit</label>
                    <input type="number" name="number" class="form-control" id="exampleInputUsername1" placeholder="Amount in USD">
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
  </div>
@endsection

@section('script')
<script src="{{ asset('template/js/data-table.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
@endsection
