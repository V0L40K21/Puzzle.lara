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
                            <li class="toggle-menu__item"><a href="{{ route('contacts') }}">Web</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('mobile') }}">Mobile</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('seo') }}">SEO</a></li>
                            <li class="toggle-menu__item"><a href="{{ route('smm') }}">SMM</a></li>
                            <li class="active"><a href="{{ route('about') }}">Branding</a></li>
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
                <section class="about">
                    <div class="hb"><span></span><span>О компании</span></div>
                    <div class="container">
                        <div class="about__head">
                            <div class="about__title">
                                <h1>Puzzle</h1>
                            </div>
                            <div class="about__subtitle">О компании</div>
                        </div>
                        <div class="about__about">
                            <div class="about__about-title">
                                <h2>кратко о нас</h2>
                            </div>
                            <div class="about__about-text">
                                <p>Страница «О компании» не должна рассказывать о вашей компании. Посетитель должен
                                    найти здесь информацию о себе, о своих интересах и потребностях. Он должен узнать,
                                    как вы решите его проблемы и почему вы обязательно это сделаете. Создавая страницу
                                    «О нас», помните: на самом деле она называется «О вас»</p>
                            </div>
                        </div>
                        <div class="about__info">
                            <div class="about__info-card__first">
                                <h3>Что умеем и как умеет puzzle</h3>
                            </div>
                            <div class="about__info-card white">
                                <h3>сайты</h3>
                                <p># адаптивный дизайн</p>
                                <p># фронтенд-разработка</p>
                                <p># бэкенд-разработка</p>
                                <p># разработка под ключ</p>
                                <p># 1С-Битрикс стиль</p>
                            </div>
                            <div class="about__info-card purple">
                                <h3>сайты</h3>
                                <p># адаптивный дизайн</p>
                                <p># фронтенд-разработка</p>
                                <p># бэкенд-разработка</p>
                                <p># разработка под ключ</p>
                                <p># 1С-Битрикс стиль</p>
                            </div>
                            <div class="about__info-card white">
                                <h3>Приложения</h3>
                                <p><span class="pink-sharp"># </span>дизайн</p>
                                <p><span class="pink-sharp"># </span> бэкенд-разработка</p>
                                <p><span class="pink-sharp"># </span> iOS</p>
                                <p><span class="pink-sharp"># </span> android</p>
                            </div>
                            <div class="about__info-card pink">
                                <h3>SEO</h3>
                                <p># адаптивный дизайн</p>
                                <p># фронтенд-разработка</p>
                                <p># бэкенд-разработка</p>
                                <p># разработка под ключ</p>
                                <p># 1С-Битрикс стиль</p>
                            </div>
                            <div class="about__info-card gray">
                                <h3>Брендинг</h3>
                                <p># адаптивный дизайн</p>
                                <p># фронтенд-разработка</p>
                                <p># бэкенд-разработка</p>
                                <p># разработка под ключ</p>
                                <p># 1С-Битрикс стиль</p>
                            </div>
                        </div>
                        <div class="reviews">
                            <div class="reviews__title">
                                <h3>отзывы клиентов</h3>
                            </div>
                            <div class="reviews__tabs">
                                <ul class="tabs__caption">
                                    <li class="reviews__tabs-active">01</li>
                                    <li>02</li>
                                    <li>03</li>
                                    <li>04</li>
                                    <li>05</li>
                                    <li>06</li>
                                    <li>07</li>
                                </ul>
                                <div class="reviews__content">
                                    <div class="reviews__text">
                                        <p>Подсознание читателя сегодня крайне лениво: увидев большой и однообразный
                                            текст,
                                            оно подает читателю сигналы “это скучно”, “это долго”, “уходим”. И человек
                                            уходит. </p>
                                    </div>
                                    <div class="reviews__company">
                                        <p class="reviews__company-name">Company Name</p>
                                        <p class="reviews__name">Ivan Ivanov</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="public-info">
                            <div class="public-info__title">
                                <h2>Общая информация</h2>
                            </div>
                            <div class="public-info__wrapper">
                                <div class="public-info__block">
                                    <img src="img/icons/timetable.svg" alt="timetable">
                                    <h3>2015</h3>
                                    <span>Год основания</span>
                                </div>
                                <div class="public-info__block">
                                    <img src="img/icons/project-management.svg" alt="project-management">
                                    <h3>2015</h3>
                                    <span>Год основания</span>
                                </div>
                                <div class="public-info__block">
                                    <img src="img/icons/teamwork.svg" alt="teamwork">
                                    <h3>2015</h3>
                                    <span>Год основания</span>
                                </div>
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