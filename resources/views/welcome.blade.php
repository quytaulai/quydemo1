<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>
    <div class="app">
        <header class="header">
            <img src="{{ asset('image/thuantri.png') }}" title="avata" alt="" class="header-img">
            <img src="{{  asset('image/icon2024.webp')}}" title="ảnh 2024" alt="" class="header-img">
            <div class="header__right">
                <ul class="header__ul">
                    {{-- <li class="header__li"><a href="" class="header__li-a">Fica</a></li>
                    <li class="header__li"><a href="" class="header__li-a">New</a></li>
                    <li class="header__li"><a href="" class="header__li-a">Dân sinh</a></li> --}}
                    <li class="header__li"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                      </svg></li>
                </ul>
            </div>
        </header>
        <div class="content">

        </div>
        <footer class="footer">

        </footer>
    </div>
</body>
</html>
