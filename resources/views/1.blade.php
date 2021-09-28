@extends('ancestor')


@section('body')
<p>Hello, {{$user ?? ''}}</p>
<p>Hello, {{$user2 ?? ''}}</p>
<p>Hello, {{$user3 ?? ''}}</p>

<ul>
    <dt><p class="text-center">Сервис емейл рассылок</p></dt>
    <dd><ul class="list-group list-group-flush">

            <li class="list-group-item"> Функции :</li>

            <li class="list-group-item">-выгрузка имейлов в форматах csv и json ;</li>

            <li class="list-group-item"> - парсинг, проверка на уникальность, валидация и запись в базу данных ;</li>

            <li class="list-group-item">- сортировка ящиков по доменам ;</li>

            <li class="list-group-item">- возможность загрузки текста письма и управление рассылкой с веб-интерфейса ;</li>

            <li class="list-group-item">- отчеты о доставке, баунсах, деферах и покупках с веб-интерфейса ;</li>

            <li class="list-group-item"> - возможность использования мультидоменных рассылок ( связка айпи-домен ), управление этой функцией, то есть переключение между доменами и айпи в ручном и автоматическом режиме ;</li>

            <li class="list-group-item"> - управление скоростью рассылки ( количество писем в час ) в ручном и автоматическом режиме ;</li>

            <li class="list-group-item">- получение баунсов из входящей папки ( протокол imap), автоматическое и ручное
            удаление не действительных имейл адресов из базы данных ;</li>

            <li class="list-group-item">- функция дабл опт ин ;</li>

            <li class="list-group-item">-функция отписки от рассылки ;</li>

            <li class="list-group-item">-поддержка всех выше описанных функций в режиме high-load , рассылка нескольких миллионов писем в день или больше ;</li>

    <dt><p class="text-center">Используемые технологии :</p></dt>

    <li class="list-group-item"> Exim - смпт движок для рассылки</li>

    <li class="list-group-item"> Dovecot - сервис доставки писем</li>

    <li class="list-group-item"> Библиотека PHPMailer - как функиця управления exim через 25й порт, в отличие от стандартного mail в php , поддерживает управление связками айпи-домен и позволяет держать сессию с смпт открытой до конца рассылки, не вызывая ее для отправки каждого письма;</li>

    <li class="list-group-item"> JavaScript и ajax- отображение всей информации в веб-интерфейсе</li></p></dd>
</ul>
@endsection
