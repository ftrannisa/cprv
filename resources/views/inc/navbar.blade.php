
<nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-2 mt-0">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="#">Tech Assessment</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Login</a></li>
                <li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a href="/product" class="nav-link">Product</a></li>
                <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"><a href="/report" class="nav-link">Report</a></li>
            </ul>
        </div>
    </div>
</nav>
