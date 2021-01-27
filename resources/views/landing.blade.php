@extends('template.template')

@section('page-content')
    <section class="tab-content" style="background-image: url({{asset("images/bg1.png")}});">
        <h1 class="h11">
            Здравствуйте!<br>
            Куда бы Вы хотели отправиться?
        </h1>
        <div class="tab">
            <div style="padding-top: 10px; display: flex; flex-direction: row; justify-content: center; font-size: 15px;">
                <input type="radio" name="choice" class="d1" style="padding-right: 10px;">в обе стороны</input>
                <input type="radio" name="choice" class="d1" style="padding-right: 10px;">в один конец</input>
                <input type="radio" name="choice" class="d1" style="padding-right: 10px;">сложный маршрут</input>

            </div>
            <div style="justify-content: center;">
                <form class="tab1" method="post" action={{route("search")}}>
                    @csrf
                    <div class="bb1">
                        <i class="fas fa-exchange-alt"></i>
                        <input type="text" name="from" class="b1" value="Откуда" style="text-align:center; background-color: white; color: #004777; font-size: 32px; align-items: center; justify-content: center;">
                        <input type="text" name="where" class="b1" value="Куда" style="text-align:center;background-color: white; color: #004777; font-size: 32px; align-items: center; justify-content: center;">
                    </div>
                    <div class="bb2">
                        <div class="b1" style="background-color: #004777; font-size: 32px; align-items: center; justify-content: center;">Даты &zwnj; <i class="far fa-calendar-alt" style="color: white;"></i></div>
                        <input type="submit" value="Готово" class="b1" style="color: white; border: none; background-color: #004777; font-size: 32px; align-items: center; justify-content: center;">
                    </div>
                </form>
            </div>
            <div style="padding: 10px; padding-bottom: 10px; margin: 0 auto; font-size: 15px;">
                Предыдущие запросы
            </div>
        </div>
    </section>
    <section class="more-popular" style="padding-top: 30px;">
        <div class="h1" style="padding-bottom: 30px;">
            <p style="color: #004777;">Посмотрите лучшие предложения из &nbsp; </p>
            <p style="color: #E53D00;">Киев &zwnj; <i class="fas fa-caret-down"></i></p>
        </div>

        <div class="b2" style="padding-bottom: 30px;">
            <div class="b21" style="background-image: url({{asset("images/p1.png")}});"></div>
            <div class="b22">
                <div class="b220">
                    <p class="b221">Станбул</p>
                    <p class="b222">Начиная от 299 USD</p>
                </div>
                <div class="button">Забронировать</div>
            </div>
        </div>

        <div class="b2" style="padding-bottom: 30px;">
            <div class="b21" style="background-image: url({{asset("images/p2.png")}});"></div>
            <div class="b22">
                <div class="b220">
                    <p class="b221">Тбилиси</p>
                    <p class="b222">Начиная от 249 USD</p>
                </div>
                <div class="button">Забронировать</div>
            </div>
        </div>

        <div class="b2" style="padding-bottom: 30px;">
            <div class="b21" style="background-image: url({{asset("images/p3.png")}});"></div>
            <div class="b22">
                <div class="b220">
                    <p class="b221">Бухарест</p>
                    <p class="b222">Начиная от 199 USD</p>
                </div>
                <div class="button">Забронировать</div>
            </div>
        </div>

        <div class="h1" style="padding-bottom: 30px;">
            <p style="color: #004777;">Навстречу новым городам вместе со специальными предложениями!</p>
        </div>
        <div class="h1" style="padding-bottom: 30px;">
            <p style="color: #E53D00;">Просмотреть весь список &zwnj;<i class="fas fa-chevron-right" style="color: #E53D00;"></i><i class="fas fa-chevron-right" style="color: #E53D00;"></i><i class="fas fa-chevron-right" style="color: #E53D00;"></i></p>
        </div>
        <hr>
    </section>
    <section class="partners" style="padding-top: 30px;">
        <div class="h1" style="padding-bottom: 30px;">
            <p style="color: #004777; font-size: 36px;">Наши партнеры</p>
        </div>
        <div class="cc">
            <div class="c">
                <div class="c11" style="background-image: url({{asset("images/1.png")}});"></div>
                <div class="c11" style="background-image: url({{asset("images/2.png")}});"></div>
                <div class="c11" style="background-image: url({{asset("images/3.png")}});"></div>
                <div class="c12" style="background-image: url({{asset("images/4.png")}});"></div>
            </div>
            <div class="c">
                <div class="c11" style="background-image: url({{asset("images/5.png")}});"></div>
                <div class="c11" style="background-image: url({{asset("images/6.png")}});"></div>
                <div class="c11" style="background-image: url({{asset("images/7.png")}});"></div>
                <div class="c12" style="background-image: url({{asset("images/8.png")}});"></div>
            </div>
        </div>
        <div class="h1" style="padding-bottom: 30px;">
            <p class="h22" style="color: #004777; font-size: 26px;">Сотрудничаем только с лучшими в мире!</p>
        </div>
    </section>
    <hr>
@endsection()
