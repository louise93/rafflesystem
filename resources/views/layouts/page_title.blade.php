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
                            <button class="btn btn-rounded pink-gradient text-uppercase pr-3" data-toggle="modal" data-target="#createOrder"><i class="material-icons">add</i> <span class="text-hide-xs">Pay Bill</span></button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>