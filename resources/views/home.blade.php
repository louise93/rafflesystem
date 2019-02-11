@extends('layouts.app')

@section('content')
     <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">My Cards</h4>
                                </div>
                                <input type="text" class="form-control form-control-sm daterange mr-2" name="daterange" value="01/01/2018 - 01/15/2018" />
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col">
                                    <div class="carosel swiper-location-carousel">
                                        <div data-pagination='{"el": ".swiper-pagination"}' data-space-between="0" data-slides-per-view="auto" class="swiper-container swiper-init swiper-product">
                                            <div class="swiper-pagination"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide  card-carousel">
                                                    <div class="pink-gradient p-3 debit-card">
                                                        <h2 class="d-block">
                                                            <i class="material-icons">local_play</i>
                                                        </h2>
                                                        <h4 class="mt-2 font-weight-normal">0000 0000 0000 0000</h4>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <h5 class="mb-0">John McMohan</h5>
                                                                <p class="mb-0 small">Card Holder</p>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="mb-0">7/11</h5>
                                                                <p class="mb-0 small">Expiry</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide card-carousel">
                                                    <div class="primary-gradient p-3 debit-card">
                                                        <h2 class="d-block">
                                                            <i class="material-icons">local_play</i>
                                                        </h2>
                                                        <h4 class="mt-2 font-weight-normal">0000 0000 0000 0000</h4>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <h5 class="mb-0">John McMohan</h5>
                                                                <p class="mb-0 small">Card Holder</p>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="mb-0">7/11</h5>
                                                                <p class="mb-0 small">Expiry</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide card-carousel">
                                                    <div class="danger-gradient p-3 debit-card">
                                                        <h2 class="d-block">
                                                            <i class="material-icons">local_play</i>
                                                        </h2>
                                                        <h4 class="mt-2 font-weight-normal">0000 0000 0000 0000</h4>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <h5 class="mb-0">John McMohan</h5>
                                                                <p class="mb-0 small">Card Holder</p>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="mb-0">7/11</h5>
                                                                <p class="mb-0 small">Expiry</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide card-carousel">
                                                    <div class="warning-gradient p-3 debit-card">
                                                        <h2 class="d-block">
                                                            <i class="material-icons">local_play</i>
                                                        </h2>
                                                        <h4 class="mt-2 font-weight-normal">0000 0000 0000 0000</h4>
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <h5 class="mb-0">John McMohan</h5>
                                                                <p class="mb-0 small">Card Holder</p>
                                                            </div>
                                                            <div class="col text-right">
                                                                <h5 class="mb-0">7/11</h5>
                                                                <p class="mb-0 small">Expiry</p>
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
                        <div class="card-body">
                            <div class="media mb-3">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">$ 2541.00</h4>
                                    <p class="content-color-secondary mb-0">This month | Updated 1 min ago</p>
                                </div>
                            </div>
                            <canvas class="" id="linechartarea"></canvas>
                        </div>
                        <div class="card-footer border-top mt-1">
                            <div class="row">
                                <div class="col-auto border-right">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="content-color-primary mb-0">208</h5>
                                            <p class="content-color-secondary mb-0 small">Income</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto border-right">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="content-color-primary mb-0">165</h5>
                                            <p class="content-color-secondary mb-0 small">Expense</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="content-color-primary mb-0">50</h5>
                                            <p class="content-color-secondary mb-0 small">Billed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card mb-4 fullscreen has-background-img ">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="mb-0">3 Bills</h4>
                                            <p class="mb-0">Pending to be paid</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-1 pb-0 px-0">
                                    <ul class="list-group border-top border-bottom list-group-flush">
                                        <li class="list-group-item link-media">
                                            <a href="" class="media">
                                                <div class="icon-circle icon-40 bg-light-primary mr-3">
                                                    <i class="material-icons">assignment</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 content-color-primary"><span class="text-primary">$15.00</span> Dinner caffe</h6>
                                                    <p class="small">Due Date: 7/11/2018</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item link-media">
                                            <a href="" class="media">
                                                <div class="icon-circle icon-40 bg-light-primary mr-3">
                                                    <i class="material-icons">assignment</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 content-color-primary"><span class="text-primary">$12.00</span> Alexa Cotton</h6>
                                                    <p class="small">Due Date: 7/11/2018</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item link-media">
                                            <a href="" class="media">
                                                <div class="icon-circle icon-40 bg-light-primary mr-3">
                                                    <i class="material-icons">assignment</i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 content-color-primary"><span class="text-primary">$30.00</span> Raymond Swe...</h6>
                                                    <p class="small">Due Date: 7/11/2018</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="media">
                                        <figure class="avatar avatar-50 mr-2">
                                            <img src="img/user1.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <p class="content-color-secondary mb-0">Welcome</p>
                                            <h4 class="content-color-primary mb-0">John McMohan</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h1 class="mt-4">$ 124</h1>
                                    <p class="small mb-0 content-color-secondary">Spent Today</p>
                                </div>
                                <div class="card-footer bg-light-secondary border-top">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="content-color-primary mb-0">$ 220</h5>
                                            <p class="content-color-secondary mb-0 small">Received Today</p>
                                        </div>
                                        <a href="" class="icon-circle icon-40 content-color-secondary">
                                            <i class="material-icons icon-lg">keyboard_arrow_right</i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="mb-0">Top Supporter</h4>
                                        </div>
                                        <div class="dropdown d-inline-block">
                                            <a href="#" class="icon-circle icon-30  dropdown-toggle caret-none" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="material-icons ">more_vertical</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item">Refresh</a>
                                                <a href="" class="dropdown-item">Setting</a>
                                                <a href="" class="dropdown-item">Close</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="profile.html">
                                        <figure class="avatar avatar-120 mx-auto">
                                            <img src="img/user1.png" alt="">
                                        </figure>
                                        <h5 class="mt-2 content-color-primary text-center">John McMohan</h5>
                                    </a>
                                </div>
                                <div class="card-footer border-top">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="mb-0">$ 550 invoice sent</h5>
                                            <p class="mb-0 small"><span class="content-color-primary">52%</span> invoice are paid</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card mb-4 has-background-img bg-dark">
                                <figure class="background-img ">
                                    <img src="img/bw.jpg" alt="">
                                </figure>
                                <div class="card-header pb-0">
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="text-white mb-0">Black & White</h4>
                                            <p class="text-secondary mt-1">For people who has special ability of color blindness <a href="colorblindness.html" class="text-white" target="_blank">Read more.</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <label class="d-inline-block mr-2 text-white">Enable</label>
                                    <input type="checkbox" id="darktheme" class="switch">
                                    <label for="darktheme" class="bg-dark mb-2 border"></label>
                                </div>
                            </div>
                            <div class="card mb-4 animated animateflipy">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="icon-circle icon-50 bg-light-pink mr-3">
                                            <i class="material-icons">settings</i>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="content-color-primary mb-0 mt-2">Color schemes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-light-secondary border-top ">
                                    <a href="javascript:void(0);" id="opencolorpanel" class="media">
                                        <div class="media-body">
                                            <h5 class="content-color-primary mb-0">White</h5>
                                            <p class="content-color-secondary mb-0 small">Change Color Scheme</p>
                                        </div>
                                        <div class="icon-circle icon-40 content-color-secondary">
                                            <i class="material-icons icon-lg">keyboard_arrow_right</i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="content-color-primary mb-0">Freelancing</p>
                                    <h4 class="mb-0 mt-1">50%</h4>
                                </div>
                                <div class="w-auto position-relative">
                                    <div class="text-success"><i class="material-icons icon-sm">arrow_drop_up</i> 10%</div>
                                    <div class="dynamicsparkline mt-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="content-color-primary mb-0">Interest</p>
                                    <h4 class="mb-0 mt-1">10%</h4>
                                </div>
                                <div class="w-auto position-relative">
                                    <div class="text-danger"><i class="material-icons icon-sm">arrow_drop_down</i> 5%</div>
                                    <div class="dynamicsparkline mt-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="content-color-primary mb-0">Treding</p>
                                    <h4 class="mb-0 mt-1">30% <span class="dynamicsparkline mt-1 float-right"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="content-color-primary mb-0">Revenue Generated</p>
                                    <h4 class="mb-0 mt-1">10% <span class="dynamicsparkline mt-1 float-right"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 pink-gradient">
                        <div class="card-header">
                            <div class="card-title mb-0">Food</div>
                        </div>
                        <div class="card-body text-center py-0">
                            <h1 class="disaply-1"><i class="material-icons">local_dining</i></h1>
                        </div>
                        <div class="card-footer">
                            <h4 class="mb-0">$ 550</h4>
                            <small class="text-white">Spent</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="card-title  mb-0">Travel</div>
                        </div>
                        <div class="card-body text-center py-0">
                            <h1 class="disaply-1"><i class="material-icons">local_taxi</i></h1>
                        </div>
                        <div class="card-footer">
                            <h4 class="mb-0">$ 3550</h4>
                            <small class="text-secondary">Spent</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="card-title  mb-0">Cloths</div>
                        </div>
                        <div class="card-body text-center py-0">
                            <h1 class="disaply-1"><i class="material-icons">face</i></h1>
                        </div>
                        <div class="card-footer">
                            <h4 class="mb-0">$ 1525</h4>
                            <small class="text-secondary">Spent</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="card-title mb-0">Entertainment</div>
                        </div>
                        <div class="card-body text-center py-0">
                            <h1 class="disaply-1"><i class="material-icons">movie_filter</i></h1>
                        </div>
                        <div class="card-footer">
                            <h4 class="mb-0">$ 200</h4>
                            <small class="text-secondary">Spent</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Connected Companies</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table border-bottom mb-0 footable">
                                <thead class="d-none">
                                    <tr>
                                        <th>Business</th>
                                        <th data-breakpoints="xs">Total</th>
                                        <th data-breakpoints="xs sm">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    T
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">TataSky</h6>
                                                    <p class="small">C. No. 02145/2254/8524</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 3250</h6>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-rounded btn-outline-success px-3 btn-sm">Paid</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    E
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Electricity</h6>
                                                    <p class="small">C. No. 8524</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 1250</h6>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-rounded btn-outline-danger px-3 btn-sm">cancelled</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    B
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Broadband</h6>
                                                    <p class="small">C. No. 021458524</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 5250</h6>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-rounded btn-outline-warning px-3 btn-sm">Pending</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Services Buyers</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <table class="table border-bottom mb-0 footable">
                                <thead class="d-none">
                                    <tr>
                                        <th>User</th>
                                        <th data-breakpoints="xs">Total</th>
                                        <th data-breakpoints="xs sm">Earning</th>
                                        <th data-breakpoints="xs sm">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    M
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">MII</h6>
                                                    <p class="small">+52854 USD</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 3250</h6>
                                            <div class="text-success"><i class="material-icons icon-sm">arrow_drop_up</i> 10%</div>
                                        </td>
                                        <td>
                                            <div class="smallsparkchart"></div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-rounded btn-outline-danger px-3 btn-sm">Sell</button>
                                            <button class="btn btn-rounded btn-outline-success px-3 btn-sm">Buy</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    T
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Teslaa</h6>
                                                    <p class="small">+ 52525 USD</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 1250</h6>
                                            <div class="text-danger"><i class="material-icons icon-sm">arrow_drop_down</i> 2%</div>
                                        </td>
                                        <td>
                                            <div class="smallsparkchart"></div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-rounded btn-outline-danger px-3 btn-sm">Sell</button>
                                            <button class="btn btn-rounded btn-outline-success px-3 btn-sm">Buy</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="icon-circle icon-50 bg-light-primary mr-3">
                                                    B
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="my-0 mt-1">Boarding UI</h6>
                                                    <p class="small">-150 USD/p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="my-0 mt-1">$ 5250</h6>
                                            <div class="text-danger"><i class="material-icons icon-sm">arrow_drop_down</i> 2%</div>
                                        </td>
                                        <td>
                                            <div class="smallsparkchart"></div>
                                        </td>
                                        <td class="text-right">
                                            <button class="btn btn-rounded btn-outline-danger px-3 btn-sm">Sell</button>
                                            <button class="btn btn-rounded btn-outline-success px-3 btn-sm">Buy</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Today’s Task list <small class="content-color-secondary float-right mr-2 mt-1">7 November 2018</small></h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0 pb-2">
                            <ul class="list-group border-top border-bottom list-group-flush">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="custom-control custom-checkbox todo-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label " for="customCheck1"></label>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0 text-truncated">Pay bills</h6>
                                            <p class="small">High Priority</p>
                                        </div>
                                        <button class="btn btn-link text-danger todohide"><i class="material-icons">delete</i></button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="custom-control custom-checkbox todo-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label " for="customCheck2"></label>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0">Fix the refridgerator</h6>
                                            <p class="small">Resolved</p>
                                        </div>
                                        <button class="btn btn-link text-danger todohide"><i class="material-icons">delete</i></button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="custom-control custom-checkbox todo-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" checked>
                                            <label class="custom-control-label " for="customCheck3"></label>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0">Borrow cooker</h6>
                                            <p class="small">Assigned</p>
                                        </div>
                                        <button class="btn btn-link text-danger todohide"><i class="material-icons">delete</i></button>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="custom-control custom-checkbox todo-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label " for="customCheck4"></label>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="my-0">Check balance for the last month!</h6>
                                            <p class="small">Assigned</p>
                                        </div>
                                        <button class="btn btn-link text-danger todohide"><i class="material-icons">delete</i></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="card-body ">
                            <div class="text-center">
                                <img src="img/birtmsg.png" class="mw-100 mx-auto mb-3" alt="">
                            </div>
                            <h1 class="font-weight-light">Bill<br> Paid!</h1>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">C no.581254865263205</h5>
                                    <p class="content-color-secondary mb-0 small">Electricity</p>
                                </div>
                                <a href="" class="icon-circle icon-40 content-color-secondary">
                                    <i class="material-icons icon-lg">keyboard_arrow_right</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Global Support</h4>
                                    <p class="content-color-secondary mb-0">5200 Support in month</p>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons ">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="vectormap" id="mapwrap"></div>
                        </div>
                        <div class="card-footer  border-top">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="content-color-primary mb-0">Make a Stock</h5>
                                    <p class="content-color-secondary mb-0 small"><span class="content-color-primary">-12.00%</span> price dropped</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
