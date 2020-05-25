@extends('layouts.app')

@section('content')
    <section class="new-head">
        <div class="container">
            <header class="header header-purple">
                <div class="logo"><a href="/"><img src="img/logo-purple.svg" alt="logo"></a></div>
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
                            <li class="toggle-menu__item"><a href="{{ route('home') }}">Все проекты</a></li>
                            <li class="active"><a href="{{ route('contacts') }}">Web</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('mobile') }}">Mobile</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('seo') }}">SEO</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('smm') }}">SMM</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('about') }}">Branding</a></li>
                        </ul>
                    </nav>
                    <button class="contact-btn">Связаться с нами</button>
                    <div id="about_form" class="about__input-wrap">
                        <div class="about__input"><input type="text" placeholder="Ваше имя"></div>
                        <div class="about__input"><input type="text" placeholder="Телефон"></div>
                        <div class="about__input"><input type="text" placeholder="Сообщение"></div>
                        <button class="input-send">Отправить</button>
                    </div>
                </div>
                <section class="contacts">
                    <div class="hb"><span></span><span>Контакты</span></div>
                    <div class="container">
                        <div class="contacts__title">
                            <h1>Контакты</h1>
                        </div>
                        <div class="contacts-wrapper">
                            <div class="contacts__block">
                                <div class="contacts__block-title">
                                    <h3>Алматы</h3>
                                </div>
                                <div class="contacts__block-phone"><a href="tel:+77074148126">+7 (707) 414 8126</a>
                                </div>
                                <div class="contacts__block-adress">Казахстан, Алматы,
                                    ул. Байзакова, 280, БЦ
                                    Almaty Towers
                                </div>
                                <div class="contacts__block-email"><a href="mailto:info@puzzle.kz">info@puzzle.kz</a>
                                </div>
                                <div id="map" class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.6715730745714!2d76.91276221486487!3d43.23734508724039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883692d9947cb95%3A0x3b268e81bc0a3f94!2z0JDQu9C80LDRgtGLINCi0LDRg9GN0YDRgQ!5e0!3m2!1sru!2sru!4v1582522939349!5m2!1sru!2sru"></iframe></div>
                            </div>
                            <div class="contacts__block">
                                <div class="contacts__block-title">
                                    <h3>Москва</h3>
                                </div>
                                <div class="contacts__block-phone">
                                    <a href="tel:+77074148126">+7 499 245 4932</a><br>
                                    <a href="tel:+77074148126">+7 929 653 0181</a>
                                </div>
                                <div class="contacts__block-adress">Казахстан, Алматы,
                                    ул. Байзакова, 280, БЦ
                                    Almaty Towers
                                </div>
                                <div class="contacts__block-email"><a href="mailto:info@puzzle.kz">info@puzzle.kz</a>
                                </div>
                                <div id="map" class="map-moscow"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.3800122052994!2d37.59319331539029!3d55.73452600086963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54ba7b2a736e7%3A0xda62697edc15b636!2z0KTRgNGD0L3Qt9C10L3RgdC60LDRjyDQvdCw0LEuLCAyLzEsIDQxLCDQnNC-0YHQutCy0LAsIDExOTAyMQ!5e0!3m2!1sru!2sru!4v1582523392892!5m2!1sru!2sru"></iframe></div>
                                <div class="square"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
@endsection