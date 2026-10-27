<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Todoアプリ')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container inner">
            <a href="{{ route('tasks.index') }}">Todoアプリ</a>
            <span class="sub">Laravel ハンズオン</span>
        </div>
    </header>

    <main>
        <div class="container">
            {{-- 直前の処理からのお知らせ（フラッシュメッセージ） --}}
            @if (session('message'))
                <p class="alert">{{ session('message') }}</p>
            @endif

            @yield('content')
        </div>
    </main>

                @if (session('message'))
                <p class="alert alert-{{ session('type', 'success') }}">{{ session('message') }}</p>
            @endif

    <footer class="site-footer">
        <div class="container inner">作成：中村 聡太</div>
    </footer>
</body>
</html>