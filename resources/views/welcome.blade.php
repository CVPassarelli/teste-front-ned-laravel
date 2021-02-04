<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caio Vinicius Bergo Passarelli</title>

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icon/css/all.css') }}">
    </head>
    <body>
    <header>
        <div class="wrap-left">
            <button type="button" class="main-button">
                <i class="fas fa-bars"></i>
            </button>
            <img src="logo" alt="">
        </div>
        <div class="wrap-right">
            <p>Olá, Lu</p>
            <div class="menu">
                <i class="fas fa-cogs"></i>
                <div class="options">
                    <p>opt 1</p>
                    <p>opt 1</p>
                    <p>opt 1</p>
                </div>
            </div>
        </div>

    </header>
    <section>
        <div class="main-menu">
            <button type="button">
                <i class="fas fa-home"></i>
            </button>
            <button type="button">
                <i class="fas fa-chart-line"></i>
            </button>
            <button type="button">
                <i class="fas fa-ship"></i>
            </button>
            <button type="button">
                <i class="fas fa-cog"></i>
            </button>
            <button type="button">
                <i class="fas fa-user-check"></i>
            </button>
            <button type="button">
                <i class="fas fa-crosshairs"></i>
            </button>
            <button type="button">
                <i class="fas fa-archive"></i>
            </button>
            <button type="button">
                <i class="fas fa-dollar-sign"></i>
            </button>
            <button type="button">
                <i class="fas fa-list"></i>
            </button>
            <button type="button">
                <i class="fas fa-code"></i>
            </button>
        </div>
        <div class="main-content">
            <div class="tab">
                <span><i class="fas fa-home"></i> <i class="fas fa-chevron-right"></i></span>
                <span>TABEX</span>
            </div>
            <div class="content"></div>
        </div>
    </section>


    <script src="{{ asset('js/services.js') }}"></script>
    <script src="{{ asset('js/actions.js') }}"></script>
    </body>
</html>
