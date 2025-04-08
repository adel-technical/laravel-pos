<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item mt-1">
            <a href="{{ route('lang.switch', 'en') }}">English</a>
            | 
            <a href="{{ route('lang.switch', 'ar') }}">العربية</a>
            {{ __('message.sections') }}
        </li>
    </ul>
</nav>
<!-- /.navbar -->
