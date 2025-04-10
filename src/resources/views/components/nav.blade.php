<ul class="header-nav">
  @guest
    @if (Route::currentRouteName() !== 'login')
      <li class="header-nav__item">
        <a class="header-nav__link" href="{{ route('login') }}">login</a>
      </li>
    @endif

    @if (Route::currentRouteName() !== 'register')
      <li class="header-nav__item">
        <a class="header-nav__link" href="{{ route('register') }}">register</a>
      </li>
    @endif
  @endguest

  @auth
    <li class="header-nav__item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="header-nav__link" type="submit">logout</button>
      </form>
    </li>
  @endauth
</ul>
