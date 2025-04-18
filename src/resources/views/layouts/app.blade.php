<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Noticia+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')

</head>
<body>
    <header class="header">
        <div class=header__inner>
            <div class="header-utilities">
                <a class=header__logo href="/">
                FashionablyLate</a>

                @if (!isset($hideNav) || !$hideNav)
                <nav>
                    @include('components.nav')
                </nav>
                @endif

            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>      
</body>
</html>