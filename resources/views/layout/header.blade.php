<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('pages/contact') }}">Contact</a></li>
                        <li><a href="{{ url('pages/about') }}">About Me</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">Articles <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('articles.index') }}">List Articles</a></li>
                        <li><a href="{{ route('articles.create') }}">Create Article</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">Users <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('users.index') }}">List Users</a></li>
                        <li><a href="{{ route('users.create') }}">Register</a></li>
                    </ul>
                </li>
                @if(Auth::check())
                    <li><a href="{{ url('auth/logout') }}">Logout</a></li>
                @endif
            </ul>
            @if(Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_route('users.edit', $guard->name, $guard->id) !!}</li>
            </ul>
            @endif
        </div>
        <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
</nav>