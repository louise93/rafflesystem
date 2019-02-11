  <div class="sidebar sidebar-left">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{!! URL::to('dashboard') !!}" class="nav-link "><i class="material-icons icon">insert_chart_outlined</i> <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="{!! URL::to('deposit') !!}" class="nav-link "><i class="material-icons icon">cloud_upload</i> <span>Deposit</span></a>
                </li>
                 <li class="nav-item">
                    <a href="{!! URL::to('mytickets') !!}" class="nav-link "><i class="material-icons icon"> receipt</i> <span>My Tickets</span></a>
                </li>
                <li class="nav-item">
                    <a href="{!! URL::to('transactions') !!}" class="nav-link "><i class="material-icons icon">history</i> <span>Transaction Logs</span></a>
                </li>


                <li class="nav-item">
                    <a href="{!! URL::to('results') !!}" class="nav-link "><i class="material-icons icon">receipt</i> <span>Draw Results</span></a>
                </li>
                <li class="nav-item">
                    <a href="{!! URL::to('settings') !!}" class="nav-link "><i class="material-icons icon">settings</i> <span>Password Settings</span></a>
                </li>
               
                <li class="nav-item">
                    <a href="{!! URL::to('manual') !!}" class="nav-link "><i class="material-icons icon">help</i> <span>User Manual</span></a>
                </li>
                 @auth
                     @if(Auth::user()->name == 'dev_admin')
                     <li class="nav-item">
                    <a href="{!! URL::to('set_winner') !!}" class="nav-link "><i class="material-icons icon">settings</i> <span>Set A winner</span></a>
                    </li>
                     <li class="nav-item">
                    <a href="{!! URL::to('set_drawdate') !!}" class="nav-link "><i class="material-icons icon">settings</i> <span>Set Draw Date</span></a>
                    </li>
                    @endif
                @endauth
                
            </ul>
</div>