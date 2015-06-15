<nav class="tm-navbar uk-navbar uk-navbar-attached">
    <div class="uk-container uk-container-center">

        <a class="uk-navbar-brand uk-hidden-small" href="index.html">
            <img class="uk-margin uk-margin-remove" src="../images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit">
        </a>

        <ul class="uk-navbar-nav uk-visible-large">
            <li><a href="/">Home</a></li>
            <li><a href="listmanager">List Manage</a></li>
        </ul>
        <div class="uk-navbar-content uk-hidden-small uk-navbar-flip">
            @if(!Auth::check())
                <form method="post" action="/auth" class="uk-form uk-margin-remove uk-display-inline-block">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="username" type="text" placeholder="User Name">
                    <input name="password" type="password" placeholder="password">
                    <button class="uk-button uk-button-primary">Login</button>
                </form>
            @else
                <ul class="uk-navbar-nav uk-visible-large">
                    <li><a href="#">
                            <strong>Hi,{{ Auth::user()['username'] }}</strong>
                        </a></li>
                    <li><a name="logout" href="/logout">Logout</a></li>
                </ul>
            @endif
        </div>
        <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>

        <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="../images/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

    </div>
</nav>