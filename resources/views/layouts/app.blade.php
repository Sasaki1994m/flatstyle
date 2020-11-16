<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>flatstyle</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>

/* primaryを指定の色に */
.bg-primary {
    background-color: #1c4587 !important;
}

/* 画像の左右の余白を指定の色に */
.top {
    background-color: #1c4587 !important;
}

/* ヘッダーのフォントを白に */
.navbar-dark .navbar-nav .nav-link {
    color: #FFFFFF;
}

/* ヘッダーのプルダウンの背景を紺色に*/
.dropdown-menu {
    background-color: #1c4587;
}

/* ヘッダーのプルダウンのフォントを白色に*/
.dropdown-item {
    color: #FFFFFF;
}
    </style>
    </style>
</head>
<body>
    @include('commons.header')
    @yield('content')
    @include('commons.footer')
</body>
</html>