<nav class="main-nav">
    <ul class="parent-nav">
        <li class="has-dropdown">
            <a class="nav-link " href="#">
                <span class="rolling-text">HOME</span>
            </a>
            <ul class="submenu mega-menu-wrapper">
                <li class="menu-single-list">
                    <a href="#" class="top-title">Multipages</a>
                    <ul>
                        <li><a href="{{ route('index') }}">Corporate Demo</a></li>
                        <li><a href="{{ route('index-two') }}">Financial Demo</a></li>
                        <li><a href="{{ route('index-three') }}">Marketing Demo</a></li>
                        <li><a href="{{ route('index-four') }}">Agency Demo</a></li>
                        <li><a href="{{ route('index-five') }}">Startup Demo</a></li>
                        <li><a href="{{ route('index-six') }}">Construction Demo</a></li>
                        <li><a href="{{ route('index-seven') }}">Construction 2 Demo</a></li>
                        <li><a href="{{ route('index-eight') }}">Company Demo</a></li>
                    </ul>
                </li>
                <li class="menu-single-list">
                    <a href="#" class="top-title">OnePage</a>
                    <ul>
                        <li><a href="{{ route('onepage-one') }}">Onepage Corporate</a></li>
                        <li><a href="{{ route('onepage-two') }}">Onepage Financial</a></li>
                        <li><a href="{{ route('onepage-three') }}">Onepage Marketing</a></li>
                        <li><a href="{{ route('onepage-four') }}">Onepage Agency</a></li>
                        <li><a href="{{ route('onepage-five') }}">Onepage Startup</a></li>
                        <li><a href="{{ route('onepage-six') }}">Onepage Construction</a></li>
                        <li><a href="{{ route('onepage-seven') }}">Onepage Construction 2</a></li>
                        <li><a href="{{ route('onepage-eight') }}">Onepage Company</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="{{ route('about') }}">
                <span class="rolling-text">ABOUT</span>
            </a>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">SERVICES</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('service') }}">Service</a></li>
                <li><a href="{{ route('service-details') }}">Service Details</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">BLOG</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('blog-col-1') }}">Blog Col 1</a></li>
                <li><a href="{{ route('blog-col-2') }}">Blog Col 2</a></li>
                <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                <li><a href="{{ route('blog-details-2') }}">Blog Details v2</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a class="nav-link" href="#">
                <span class="rolling-text">PAGES</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ route('appoinment') }}">Appoinment</a></li>
                <li><a href="{{ route('project') }}">Project</a></li>
                <li><a href="{{ route('project-mesonary') }}">Project Mesonary</a></li>
                <li><a href="{{ route('project-mesonary-v2') }}">Project Mesonary v2</a></li>
                <li><a href="{{ route('project-slider') }}">Project Slider</a></li>
                <li><a href="{{ route('projects-details') }}">Project Details</a></li>
                <li><a href="{{ route('projects-details-2') }}">Project Details v2</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('team-2') }}">Team Two</a></li>
                <li><a href="{{ route('team-details') }}">Team Details</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('faq') }}">Faq</a></li>
                <li><a href="{{ route('notFound') }}">Error</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="{{ route('contact') }}">
                <span class="rolling-text">CONTACT</span>
            </a>
        </li>
    </ul>
</nav>