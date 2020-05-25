@extends('layouts.app')

@section('content')
    <section class="head">
        <div class="container">
            <div class="head-wrapper">
                <header class="header">
                    <span class="cubic"></span>
                    <span class="cubic cubic2"></span>
                    <div class="logo">
                        <a href="/">
                            <img src="img/logo.svg" alt="logo">
                        </a>
                    </div>
                    <div class="lang-toggle">
                        <a href="#">ru</a>
                        <div class="lang">
                            <a href="#">eng</a>
                        </div>
                    </div>
                    <div class="phone"><a href="tel:+77074148126">+7 (707) 414 8126</a></div>
                    <div class="location-toggle"><a href="#">Алматы</a>
                        <div class="location"><a href="#">Москва</a></div>
                    </div>
                </header>
                <div class="opacity-title"></div>
                <div class="title">
                    <h1>Digital для</h1>
                    <h2>
                        <span class="line-through">пользователей</span> людей
                    </h2>
                </div>
                <nav class="menu">
                    <ul class="menu-list">
                        <li class="active">
                            <a href="{{ route('home') }}">Все проекты</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="{{ route('contacts') }}">Web</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="{{ route('mobile') }}">Mobile</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="{{ route('seo') }}">SEO</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="{{ route('smm') }}">SMM</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="{{ route('about') }}">Branding</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/img/slider2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="/img/slider2.jpg" alt="">
            </div>
        </div>
    </div>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('home-form') }}" method="post">
        @csrf
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name">

        <label for="email">Введите email</label>
        <input type="email" name="email" placeholder="Введите email" id="email">

        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject">

        <label for="message">Введите сообщение</label>
        <textarea name="message" id="message" placeholder="Введите сообщение"></textarea>
        <button type="submit">Отправить</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>

@endsection