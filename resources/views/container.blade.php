@extends('template.template')

@section('page-content')
    <h1 class="container_h1">
        Перевозим в любую точку планеты!
    </h1>
    <hr class="horizontal">
    <section class="ticket">
        <div class="tickets">
            <div class="t1">
                <div class="t2">
                    <div class="t3-img" style="background-image: url({{asset("images/tt1.png")}});"></div>
                    <div class="t3-text1">Билет на рейс в Америку</div>
                    <div class="t3-text2">Многие страны, например Куба, Бразилия,<br>Аргентина и Колумбия, где музыка и<br>танцы никогда не заканчиваются,<br>отлично передают атмосферу Южной <br>Америки. А в северном полушарии на <br>бескрайних просторах расположились <br>современные города Соединенных <br>Штатов Америки и Канады.</div>
                </div>
                <hr class="vertical" style="position: relative; right: 1.5px;">
                <div class="t2">
                    <div class="t3-img" style="background-image: url({{asset("images/tt2.png")}});"></div>
                    <div class="t3-text1">Билет на рейс в Европу</div>
                    <div class="t3-text2">Современные города, где процветает <br>искусство, умиротворяющие пляжи и <br>города, соседствующие с живописными <br>лесами... Германия, Испания, Франция, <br>Греция, Великобритания, Нидерланды, <br>Норвегия, Швейцария, Грузия, <br>Македония, Украина... На выбор <br>более 60 стран с множеством <br>разнообразных развлечений.</div>

                </div>
                <hr class="vertical" style="position: relative; left: 1.5px;">
                <div class="t2">
                    <div class="t3-img" style="background-image: url({{asset("images/tt3.png")}});"></div>
                    <div class="t3-text1">Билет на рейс в Азию</div>
                    <div class="t3-text2">Вы готовы отправиться на чарующие <br>острова в бирюзовом океане и <br>посетить таинственные древние храмы? <br>Таиланд, Мальдивы, Япония, <br>Филиппины, Индия, Китай, Сингапур <br>и многие другие страны порадуют <br>Вас и помогут зарядиться позитивной <br>энергией.</div>
                </div>
            </div>
            <hr class="horizontal">
            <div class="t1">
                <div class="t2">
                    <div class="t3-img" style="background-image: url({{asset("images/tt4.png")}});"></div>
                    <div class="t3-text1">Билет на рейс в Африку</div>
                    <div class="t3-text2">Узнайте больше о дикой природе! <br>Крупные животные оставляют <br>внушительные следы, и хищники <br>передвигаются по бесконечным <br>просторам... В Африке Вас круглосуточно <br>ждут незабываемые приключения, <br>осталось только выбрать <br>направление — ЮАР, Марокко, Алжир, <br>Тунис, Маврикий или другие страны.</div>
                </div>
                <hr class="vertical">
                <div class="t2">
                    <div class="t3-img" style="background-image: url({{asset("images/tt5.png")}});"></div>
                    <div class="t3-text1">Билет на рейс в Южную Америку</div>
                    <div class="t3-text2">Вы готовы отправиться на чарующие <br>острова в бирюзовом океане и <br>посетить таинственные древние храмы? <br>Таиланд, Мальдивы, Япония, <br>Филиппины, Индия, Китай, Сингапур <br>и многие другие страны порадуют <br>Вас и помогут зарядиться позитивной <br>энергией.</div>

                </div>
                <hr class="vertical">
                <div class="t2">
                    <div class="t3-img" style="background-image: url({{asset("images/tt6.png")}});"></div>
                    <div class="t3-text1">Билет на рейс в Австралию</div>
                    <div class="t3-text2">Рекомендуем посетить Австралию — <br>прекрасный континент посреди океана. <br>Вы увидите милых коал и кенгуру, <br>которые встречаются только здесь, и <br>будете очарованы уникальной природой. <br>Вы заметите увлеченность жителей <br>Австралии и Новой Зеландии активным <br>образом жизни и спортом.</div>
                </div>
            </div>
            <hr class="horizontal">
        </div>
    </section>
    <section class="popular">
        <h1 class="container_h1">Самые популярные места</h1>
        <div class="pop-all">
            <div class="pop">
                <p class="pop1">Atlanta</p>
                <p class="pop1">Charlotte</p>
                <p class="pop1">Dallas</p>
                <p class="pop1">Dubai</p>
                <p class="pop1">Honolulu</p>
                <p class="pop1">London</p>
            </div>
            <div class="pop">
                <p class="pop1">Manila</p>
                <p class="pop1">New York</p>
                <p class="pop1">Philadelphia</p>
                <p class="pop1">Seattle</p>
                <p class="pop1">Singapore</p>
                <p class="pop1">Toronto</p>
            </div>
            <div class="pop">
                <p class="pop1">Washington</p>
                <p class="pop1">Boston</p>
                <p class="pop1">Chicago</p>
                <p class="pop1">Denver</p>
                <p class="pop1">Hong Kong</p>
                <p class="pop1">Las Vegas</p>
            </div>
            <div class="pop">
                <p class="pop1">Los Angeles</p>
                <p class="pop1">Miami</p>
                <p class="pop1">Orlando</p>
                <p class="pop1">San Francisco</p>
                <p class="pop1">Seoul</p>
                <p class="pop1">Tokyo</p>
            </div>
            <div class="pop">
                <p class="pop1">Vancouver</p>
                <p class="pop1">Kyiv</p>
                <p class="pop1">Moscow</p>
                <p class="pop1">Minsk</p>
                <p class="pop1">Tbilisi</p>
                <p class="pop1">Paris</p>
            </div>
        </div>
        <hr class="horizontal" style="margin-top: 10px;">
    </section>
    <section class="img">
        <h1 class="container_h1">Планируйте и путешествуйте!</h1>
        <div class="sec-img" style="background-image: url({{asset("images/tt7.png")}});">Планируйте и путешествуйте!</div>
    </section>
@endsection
