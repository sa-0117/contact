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
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    <main>
        <div class="thanks__content">
            <div class="thanks__message">
                <h2 class="thanks__message-front">お問い合わせありがとうございました</h2>
                <div class="thanks__message-back">
                    <p>Thank you</p>
                </div>
            </div>
            <div class="home__button">
                <a href="{{ route('index') }}" class="home__button-submit">HOME</a>
            </div>
        </div>
    </main>    
</body>
</html>