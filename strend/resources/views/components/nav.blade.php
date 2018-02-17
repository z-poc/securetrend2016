<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans navbar-fw">
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#contactus">
            <img class="navbar-logo navbar-logo-white" style="max-height: 40px;" src="{{ asset('assets/images/white.png') }}" alt="Logo">
            <img class="navbar-logo navbar-logo-black" style="max-height: 40px;" src="{{ asset('assets/images/black.png') }}" alt="Logo">
        </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse page-scroll navbar-right">
        <ul class="nav navbar-nav">
            <li><a onclick="window.location.hash = hash;" href="/">{{__('nav.home')}}<span class="sr-only"></span></a></li>
            <li><a onclick="window.location.hash = hash;" href="#services">{{__('nav.services')}}<span class="sr-only"></span></a></li>
            <li><a onclick="window.location.hash = hash;" href="#works">{{__('nav.projects')}}<span class="sr-only"></span></a></li>
            <li><a onclick="window.location.hash = hash;" href="#contactus">{{__('nav.contactus')}}<span class="sr-only"></span></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{__('nav.regio')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('/en')}}">EN</a></li>
                    <li><a href="{{url('/hu')}}">HU</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
