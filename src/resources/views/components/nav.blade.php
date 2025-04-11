<ul class="header-nav">
  {{-- /admin ページでは常に logout 表示 --}}
  @if (request()->is('admin'))
    <li class="header-nav__item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="header-nav__link">
          logout
        </button>
      </form>
    </li>
  @else
    {{-- /admin 以外のページでは通常のログイン状態で表示を切り替える --}}
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
          <button type="submit" class="header-nav__link">
            logout
          </button>
        </form>
      </li>
    @endauth
  @endif
</ul>
