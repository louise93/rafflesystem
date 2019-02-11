    <!-- main header -->
        <header class="main-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-auto pl-0">
                        <button class="btn pink-gradient btn-icon" id="left-menu"><i class="material-icons">widgets</i></button>
                        <a href="index.html" class="logo"><img src="img/logo-icon.png" alt=""><span class="text-hide-xs"><b>TAMBOLA</b></span></a>
                        <form class="search-header">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn " type="button"><i class="material-icons">search</i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col text-center p-xs-0">
                        <ul class="time-day">
                            <li class="text-right">
                                <p class="header-color-primary"><span class="header-color-secondary"><?=date('F')?></span><small><?=date('Y')?></small></p>
                                <h2><?=date('d')?></h2>
                            </li>
                            <li class="text-left">
                                <h2>36<span class="header-color-secondary font-weight-light"><sup>o</sup>C</span></h2>
                                <p class="header-color-primary text-hide-lg"><span class="header-color-secondary">London</span><small> <?=date('h:m A')?></small></p>
                            </li>
                        </ul>

                    </div>
                    <div class="col-auto pr-0">

                        <div class="dropdown d-inline-block">
                            <a class="btn header-color-secondary dropdown-toggle username" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <figure class="userpic"><img src="img/user1.png" alt=""></figure>
                                <h5 class="text-hide-xs">
                                    <small class="header-color-secondary">@if(!empty(Auth::user()->name))Welcome, @else <p class="text-danger">You're not logged-in </p> @endif </small>
                                    <span class="header-color-primary">@if(!empty(Auth::user()->name)) {{ Auth::user()->name }} @endif</span>
                                </h5>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown" aria-labelledby="dropdownMenuLink">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <a href="profile.html">
                                            <figure class="avatar avatar-120 mx-auto my-3">
                                                <img src="userpanel/img/user1.png" alt="">
                                            </figure>
                                            <h5 class="card-title mb-2 header-color-primary">@if(!empty(Auth::user()->name)) {{ Auth::user()->name }} @endif</h5>
                                            <h6 class="card-subtitle mb-3 header-color-secondary">@if(!empty(Auth::user()->name)){{ Auth::user()->email }} @endif</h6>
                                        </a>

                                        <button class="btn btn-sm pink-gradient border-0 mb-3">Sign-out</button>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- main header ends -->