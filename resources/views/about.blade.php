@extends('template.template')

@section('page-content')
    <section class="info">
        <h1 class="about-h1">Хотите больше узнать о нас?<br>Здесь мы расскажем Вам нашу историю и преимущества.</h1>
        <hr class="horizontal" style="width: 97%; margin: 0 auto;">
        <div class="info-all">
            <div class="info1">
                <div class="info2-img1" style="background-image: url({{asset("images/ab1.png")}});"></div>
                <div class="info2-text11">
                    <div class="info2-text1"><b>Мы компания с мировым именем</b></div>
                    <div class="info2-text2">Компания "Tiny Airlines" основана  в 2000 году и является<br>одной из самых масштабных и надежных пассажирских<br>авиакомпаний. Мы перевозим более 100 000 000 <br>пассажиров за год. Являемся партнером самых известных<br>мировых брендов. Мы сотрудничаем с почти всеми<br>странами мира. Уже 20 лет компания занимается<br>перевозками клиентов в любые точки планеты.<br>Наша компания имеет лучшую ценовую политику,<br>поэтому наши самолеты являются лучшим вариантом для<br>путешествий и деловых поездок для всех клиентов,<br>с какой бы страны они не были.</div>
                </div>
            </div>
            <hr class="horizontal1" style="width: 97%; margin: 0 auto;">
            <div class="info1">
                <div class="info2-text22">
                    <div class="info2-text1"><b>Мы продумываем каждый <br>этап Вашего путешествия</b></div>
                    <div class="info2-text2">Мы продумываем каждый этап Вашего путешествия за Вас. <br>Чтобы Вы могли путешествовать с комфортом, мы предлагаем <br>услуги, которые сделают перелет приятнее, например выбор <br>места, аренду автомобиля и бронирование номера в отеле. <br>Кроме того, Вы будете получать дополнительные мили за <br>каждую покупку, совершенную на нашем веб-сайте или в <br>мобильном приложении.</div>
                </div>
                <div class="info2-img2" style="background-image: url({{asset("images/ab2.png")}});"></div>
            </div>
        </div>
        <hr class="horizontal" style="width: 97%; margin: 0 auto;">
    </section>
    <section class="contacts">
        <h1 class="about-h1">Вы можете с нами связаться!</h1>
        <div class="con">
            <div class="con1">
                <div class="con1-img" style="background-image: url({{asset("images/ab3.png")}});"></div>
                <div class="con1-text">Электронная почта: tiny.airlines@gmail.com</div>
            </div>
            <div class="con1">
                <div class="con1-img" style="background-image: url({{asset("images/ab4.png")}});"></div>
                <div class="con1-text">Телефоны: 050-97777797, 097-7797797, 063-7997797</div>
            </div>
            <div class="con1">
                <div class="con1-img" style="background-image: url({{asset("images/ab5.png")}});"></div>
                <div class="con1-text">Адресс: Киев, ул. Выборгская, 103</div>
            </div>
        </div>
        <hr class="horizontal" style="width: 97%; margin: 0 auto;">
    </section>
    <section class="map">
        <h1 class="about-h1">Мы на карте</h1>
        <div class="map-img" style="background-image: url({{asset("images/ab6.png")}});"></div>
    </section>
@endsection
