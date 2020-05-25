@extends('layouts.app')

@section('content')
    <section class="new-head gray-bg">
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
                            <li class="active">
                                <a href="{{ route('seo') }}">SEO</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('smm') }}">SMM</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('about') }}">Branding</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="seo-block">
                    <div class="white-bg"></div>
                    <div class="hb"><span>Все проекты</span><span>SEO</span></div>
                    <div class="seo-block__cards">
                        <div class="seo-block__card">
                            <div class="seo-block__card-image"><img src="img/seo-image1.png" alt="logo"></div>
                            <div class="seo-block__card-title">OFFICEDESIGN.KZ</div>
                            <div class="bottom-line seo-line">2017</div>
                        </div>
                        <div class="seo-block__card">
                            <div class="seo-block__card-image"><img src="img/seo-image2.png" alt="logo"></div>
                            <div class="seo-block__card-title">OFFICEDESIGN.KZ</div>
                            <div class="bottom-line seo-line">2017</div>
                        </div>
                        <div class="seo-block__card">
                            <div class="seo-block__card-image"><img src="img/seo-image3.png" alt="logo"></div>
                            <div class="seo-block__card-title">OFFICEDESIGN.KZ</div>
                            <div class="bottom-line seo-line">2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
@endsection