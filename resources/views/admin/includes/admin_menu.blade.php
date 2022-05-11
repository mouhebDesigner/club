<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a href="{{ url('home') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Acceuil
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/clubs')) active @endif">
        <a href="{{ url('admin/clubs') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Clubs
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/membres')) active @endif">
        <a href="{{ url('admin/membres') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Membres
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/evenements')) active @endif">
        <a href="{{ url('admin/evenements') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                evenements
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
  
</ul>