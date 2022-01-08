<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | CRE Sistemas</title>
      <!--  <link rel="shortcut icon" href="/assets/logo.webp"> -->
        <link rel="shortcut icon" href="{{ asset('/assets/logo.webp') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/031c2785bc.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="nav">
                <a href="/" class="logo"><img src="/assets/logo.webp" alt=""></a>
                
                <input type="checkbox" id="menu-bar">
                <label for="menu-bar"><i class="fas fa-bars"></i></label>
    
                <nav class="navbar">
                    <ul>
                        <li><a class="active" href="/">Inicio</a></li>
                        <li><a href="/products">Nuestros productos</a></li>
                        <li><a href="/about">Nosotros</a></li>
                        <li><a href="/contact">Conctacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="footer_main">
                <div class="footer_information">
                    <div class="footer_menu">
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/products">Nuestros Productos</a></li>
                            <li><a href="/about">Nosotros</a></li>
                            <li><a href="/contact">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="footer_contact">
                        <h2>Contacto</h2>
                        <div class="content_p">
                            <div>
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>  
                                <p>Isabel La Catolica #118 Int. 101 piso 1 Col. Vallarta Norte, Guadalajara, Jalisco C.P. 44690</p>
                            </div>
                        </div>
                        <div class="content_p">
                            <div> 
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <p>33 14 28 32 26</p>
                            </div>
                        </div>
                        <div class="content_p">
                            <div>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <p>rubens_m88@hotmail.com</p>
                                <p>cresistemascb@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_second">
                    <p class="footer_copy"> &copy; CRE Sistemas Control y Bombeo </p>
                </div>
            </div>
        </footer>
    </body>
</html>