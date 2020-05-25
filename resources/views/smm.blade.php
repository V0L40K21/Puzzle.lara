@extends('layouts.app')

@section('content')
    <section class="new-head">
        <div class="container-sm">
            <header class="header header-purple">
                <div class="logo"><a href="#"><img src="img/logo-purple.svg" alt="logo"></a></div>
                <div class="mobile-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="lang-toggle__purple">ru</div>
                <div class="phone-purple"><a href="tel:+77074148126">+7 (707) 414 8126</a></div>
                <div class="location-toggle__purple">Алматы</div>
            </header>
            <div class="wrapper">
                <div class="toggle-menu__inner">
                    <nav class="toggle-menu">
                        <ul class="toggle-menu__list">
                            <li class="toggle-menu__item">
                                <a href="{{ route('home') }}">Все проекты</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('contacts') }}">Web</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('mobile') }}">Mobile</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('seo') }}">SEO</a>
                            </li>
                            <li class="active">
                                <a href="{{ route('smm') }}">SMM</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('about') }}">Branding</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="smm-block">
                    <div class="hb"><span>Все проекты</span><span>SMM</span></div>
                    <div class="smm-block__card">
                        <img src="img/smm-image1.png" alt="smm">
                        <p><a class="smm-block__link" href="#">WWW.MOTIVAWOMAN.COM</a></p>
                        <div class="bottom-line">2017</div>
                    </div>
                    <div class="smm-block__card">
                        <img src="img/smm-image2.png" alt="smm">
                        <p><a class="smm-block__link" href="#">ПРЕМЬЕРА 7 СЕЗОНА «ИГРЫ ПРЕСТОЛОВ»</a></p>
                        <div class="bottom-line">2017</div>
                    </div>
                    <div class="smm-block__card">
                        <img src="img/smm-image3.png" alt="smm">
                        <p><a class="smm-block__link" href="#">ПРЕДПОКАЗ 100-ОЙ СЕРИИ «ХОДЯЧИХ МЕРТВЕЦОВ»</a></p>
                        <div class="bottom-line">2017</div>
                    </div>
                </div>
            </div>
        </div>
        <span class="purple-cubic"></span>
        <span class="purple-cubic2"></span>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
endsection