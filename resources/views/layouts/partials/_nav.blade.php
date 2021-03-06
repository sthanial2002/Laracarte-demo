<nav class="navbar navbar-expand-md navbar-dark static-top bg-dark">
      <a class="navbar-brand" href="#">{{config('app.name')}}</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto" >
         
          <li class="nav-item {{set_active_route('root_path')}}">
            <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{set_active_route('about_path')}}">
            <a class="nav-link" href="{{route('about_path')}}">About</a>
          </li>
          <li class="nav-item {{set_active_route('artisans_path')}}">
            <a class="nav-link" href="{{route('artisans_path')}}">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="http://laravel.com">Laravel.com</a>
              <a class="dropdown-item" href="http://laravel.io">Laravel.io</a>
              <a class="dropdown-item" href="http://laracasts.com">Laracast</a>
              <a class="dropdown-item" href="http://larajobs.com">Larajobs</a>
              <a class="dropdown-item" href="http://laravel-news.com">Laranews</a>
              <a class="dropdown-item" href="http://larachat.co">Larachat</a>
            </div>
          </li>
          <li class="nav-item {{set_active_route('contact.create')}}">
            <a class="nav-link" href="{{route('contact.create')}}">Contact</a>
          </li>
        </ul>
        @if(Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-rounded" src="{{ Auth::user()->present()->profileImage(20)  }}" width="20" /> {{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('account_path') }}">My profile</a></li>
              <li><a href="{{ route('edit_account_path') }}">Edit profile</a></li>
              <li><a href="{{ route('new_password_path') }}">Change my password</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
          </li>
        @else
        <ul class="nav nabar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="{{ route('login') }}">Login</a>
          </li> |
          <li class="nav-item">
            <a class="nav-link btn btn-info" href="{{route('register')}}">Register</a>
          </li>
          @endif
        </ul>
          
      </div>
    </nav>