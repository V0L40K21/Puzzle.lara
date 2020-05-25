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
            <div class="wrapper wrapper-mobile">
                <div class="toggle-menu__inner">
                    <nav class="toggle-menu">
                        <ul class="toggle-menu__list">
                            <li class="toggle-menu__item">
                                <a href="{{ route('home') }}">Все проекты</a>
                            </li>
                            <li class="toggle-menu__item">
                                <a href="{{ route('contacts') }}">Web</a>
                            </li>
                            <li class="active">
                                <a href="{{ route('mobile') }}">Mobile</a>
                            </li>
                            <li class="toggle-menu__item">
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
                <div class="mobile-wrap">
                    <div class="mobile__card">
                        <div class="mobile__card-left">
                            <div class="mobile__card-title">
                                <h2>Honor.su</h2>
                            </div>
                            <div class="mobile__card-year">
                                <p>2017</p>
                            </div>
                            <div class="mobile__card-text">
                                <p>Разработка мобильного приложения iOS
                                    Разработка фирменного стиля, логотипа проекта и иконки мобильного приложения.</p>
                            </div>
                            <div class="mobile__card-info">
                                <div class="mobile__card-cat">Торги. Финансы.</div>
                                <div class="mobile__card-list">
                                    <li class="mobile__card-list__item">Задача организации,</li>
                                    <li class="mobile__card-list__item">Количественный рост и сфера Задача организации,
                                    </li>
                                </div>
                                <div class="mobile__card-description">Описание</div>
                            </div>
                        </div>
                        <div class="mobile__card-right">
                            <div class="mobile__card-img">
                                <img src="img/1510654337_telefon-sloyai-mersa42-1.png" alt="phone">
                                <img src="img/1510654337_telefon-sloyai-mersa42-2.png" alt="phone">
                                <div class="button button-purple"><a href="#">Перейти на сайт</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile__card">
                        <div class="hb"><span></span><span>О компании</span></div>
                        <div class="mobile__card-left">
                            <div class="mobile__card-title">
                                <h2>Honor.su</h2>
                            </div>
                            <div class="mobile__card-year">
                                <p>2017</p>
                            </div>
                            <div class="mobile__card-text">
                                <p>Разработка мобильного приложения iOS
                                    Разработка фирменного стиля, логотипа проекта и иконки мобильного приложения.</p>
                            </div>
                            <div class="mobile__card-info">
                                <div class="mobile__card-cat">Торги. Финансы.</div>
                                <div class="mobile__card-list">
                                    <li class="mobile__card-list__item">Задача организации,</li>
                                    <li class="mobile__card-list__item">Количественный рост и сфера Задача организации,
                                    </li>
                                </div>
                                <div class="mobile__card-description">Описание</div>
                            </div>
                        </div>
                        <div class="mobile__card-right">
                            <div class="mobile__card-img">
                                <img src="img/1510654337_telefon-sloyai-mersa42-1.png" alt="phone">
                                <img src="img/1510654337_telefon-sloyai-mersa42-2.png" alt="phone">
                                <div class="button button-purple"><a href="#">Перейти на сайт</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
endsection