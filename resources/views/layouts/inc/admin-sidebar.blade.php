<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':''}}" href="{{url('admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link {{ Request::is('admin/users') ? 'active':''}}" href="{{url('admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
                <a class="nav-link {{ Request::is('admin/menu')|| Request::is('admin/submenu')|| Request::is('admin/menu/*')||Request::is('admin/submenu/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMenus" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bars"></i></div>
                    Menus
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/menu')|| Request::is('admin/submenu')||Request::is('admin/menu/*')|| Request::is('admin/submenu/*') ? 'show':''}}" id="collapseMenus" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/menu')|| Request::is('admin/menu/*') ? 'active':''}}" href="{{url('admin/menu')}}"><i class="fa-solid fa-minus"></i>&ensp;Menu</a>
                        <a class="nav-link {{ Request::is('admin/submenu')|| Request::is('admin/submenu/*') ? 'active':''}}" href="{{url('admin/submenu')}}"><i class="fa-solid fa-caret-down"></i>&ensp;Sub Menu</a>
                    </nav>
                </div>
                <a class="nav-link {{ Request::is('admin/administration/chairman')|| Request::is('admin/administration/ed')||Request::is('admin/administration/chairman/*')|| Request::is('admin/administration/ed/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMenus" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bars"></i></div>
                    Administration
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/administration/chairman')|| Request::is('admin/administration/ed')||Request::is('admin/administration/chairman/*')|| Request::is('admin/administration/ed/*') ? 'show':''}}" id="collapseMenus" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/administration/chairman') ||Request::is('admin/administration/chairman/*')? 'active':''}}" href="{{url('admin/administration/chairman')}}"><i class="fa-solid fa-minus"></i>&ensp;Chairman</a>
                        <a class="nav-link {{ Request::is('admin/administration/ed')|| Request::is('admin/administration/ed/*') ? 'active':''}}" href="{{url('admin/administration/ed')}}"><i class="fa-solid fa-caret-down"></i>&ensp;ED</a>
                    </nav>
                </div>
                <a class="nav-link {{ Request::is('admin/sliders') ? 'active':''}}" href="{{url('admin/sliders')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-right-left"></i></div>
                    Sliders
                </a>
                <a class="nav-link {{ Request::is('admin/news') ? 'active':''}}" href="{{url('admin/news')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                    News
                </a>
                <a class="nav-link {{ Request::is('admin/events') ? 'active':''}}" href="{{url('admin/events')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    Events
                </a>
                <a class="nav-link {{ Request::is('admin/cards') ? 'active':''}}" href="{{url('admin/cards')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-question"></i></div>
                    Why KRCT?
                </a>
                <a class="nav-link {{ Request::is('admin/placement') ? 'active':''}}" href="{{url('admin/placement')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate"></i></div>
                    Top Placements
                </a>
                <a class="nav-link {{ Request::is('admin/feedback') ? 'active':''}}" href="{{url('admin/feedback')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-comments"></i></div>
                    Feedback
                </a>
                <a class="nav-link {{ Request::is('admin/recruiter') ? 'active':''}}" href="{{url('admin/recruiter')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-handshake"></i></div>
                    Our Recruiters
                </a>
                <a class="nav-link {{ Request::is('admin/gallery') ? 'active':''}}" href="{{url('admin/gallery')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-images"></i></div>
                    Our Gallery
                </a>
                <a class="nav-link {{ Request::is('admin/footer1')|| Request::is('admin/footer2')|| Request::is('admin/footer3')|| Request::is('admin/footer1/*')||Request::is('admin/footer2/*')||Request::is('admin/footer3/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefooters" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    Footer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/footer1')|| Request::is('admin/footer2')||Request::is('admin/footer3')|| Request::is('admin/footer1/*')|| Request::is('admin/footer2/*')||Request::is('admin/footer3/*') ? 'show':''}}" id="collapsefooters" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/footer1')|| Request::is('admin/footer1/*') ? 'active':''}}" href="{{url('admin/footer1')}}"><i class="fa-regular fa-circle-dot"></i>&ensp;Footer 1</a>
                        <a class="nav-link {{ Request::is('admin/footer2')|| Request::is('admin/footer2/*') ? 'active':''}}" href="{{url('admin/footer2')}}"><i class="fa-regular fa-circle-dot"></i>&ensp;Footer 2</a>
                        <a class="nav-link {{ Request::is('admin/footer3')|| Request::is('admin/footer3/*') ? 'active':''}}" href="{{url('admin/footer3')}}"><i class="fa-regular fa-circle-dot"></i>&ensp;Footer 3</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
