<!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          @if (Auth::user()->is_admin)
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('admin/dashboard') }}">
                  <i class="mdi mdi-home menu-icon"></i>
                   <span class="menu-title">Dashboard</span>
                 </a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="{{ url('admin/tickets') }}">
                 <i class="mdi mdi-receipt menu-icon"></i>
                  <span class="menu-title">Support Tickets</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/users') }}">
                <i class="mdi mdi-group menu-icon"></i>
                 <span class="menu-title">Users</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ url('admin/tickets') }}">
               <i class="mdi mdi-cash-multiple menu-icon"></i>
                <span class="menu-title">Tambola Tickets Sales</span>
              </a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="{{ url('admin/users') }}">
               <i class="mdi mdi-calendar menu-icon"></i>
                <span class="menu-title">Draw Schedule</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/users') }}">
              <i class="mdi mdi-group menu-icon"></i>
               <span class="menu-title">Winners</span>
             </a>
           </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::TO('dashboard') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="../../pages/widgets/widgets.html">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Tickets</span>
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Tambola Tickets</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('ticket/buy') }}">Buy Ticket</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::TO('ticket/history') }}">Purchase History</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ URL::TO('mywallet') }}">
              <i class="mdi mdi-wallet menu-icon"></i>
              <span class="menu-title">Wallet</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="mdi mdi-trophy-award menu-icon"></i>
              <span class="menu-title">Draw Results</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Current Draw Result</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Past Draw Results</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
              <i class="mdi mdi-account-settings menu-icon"></i>
              <span class="menu-title">Settings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Password</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manual" aria-expanded="false" aria-controls="manual">
              <i class="mdi mdi-animation menu-icon"></i>
              <span class="menu-title">Manual</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manual">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Tutorials</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#support" aria-expanded="false" aria-controls="support">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Support Ticket</span>
                <i class="menu-arrow"></i>
            </a>
           <div class="collapse" id="support">
             <ul class="nav flex-column sub-menu">
                   <li class="nav-item"><a class="nav-link" href="/new_ticket">Submit New Ticket</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{ url('tickets/my_tickets') }}">My Tickets</a></li>


             </ul>
           </div>
         </li>

         @endif
        </ul>
      </nav>
      <!-- partial -->
