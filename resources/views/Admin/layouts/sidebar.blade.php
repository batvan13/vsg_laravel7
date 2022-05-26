<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>VSG Apartments</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link active" href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('apartments.index')}}"><i class="fa fa-hotel"></i>Apartments</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}"><i class="fa fa-share-alt"></i>Shared</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('about.index')}}"><i class="fa fa-leanpub"></i>About us</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('conditions.index')}}"><i class="fa fa-leanpub"></i>Conditions</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('calendars.index')}}"><i class="fa fa-calendar"></i>Calendars</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('profile.index')}}"><i class="fas fa-user"></i><span>Brand Profile</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>