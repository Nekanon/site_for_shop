<?php

ini_set('error_reported', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once 'app/header.php';
?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <a class="navbar-brand" href="#page-top">Pro100Крепеж</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Меню <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#event">Акции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#price">Цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#positive">Наши премущества</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Контакты</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Intro Header -->
    <header class="masthead">
        <div class="intro-body">
           
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1>Pro100Крепеж</h1>
                        <p class="intro-text">Магазин крепежа и сопутствующих материалов
                            <br>На любой вкус и размер</p>
                        <a href="#price" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Event Section -->
    <section id="event" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Акции</h2>
                    <p>Здесь будут распологаться постоянно обновляемые (1 раз в неделю), товары и цены на них: до и после.</p>
                    <p>Распологаться будут постами по 4 колонки, с ценами, фирмой производителем, описанием и фотографией.</p>
                    <p>Или внизу, или вверху описание условий акции, времени проведения, но не все большим шрифтом, но должна поместиться довольно большой объем информации, но это тунжно тестировать.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Section -->
    <section id="price" class="download-section content-section text-center">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h2>Наши цены</h2>
            </div>
        </div>
        <div> <!--  class="container" -->
            <div class="grid"> 
            <?php $popular_products = get_popular_products(); ?> 
            <?php foreach($popular_products as $popular_product){ ?> 
                <div class="grid-item">
                    <div class="thumbnail">
                        <img src="public/img/<?=mb_substr($popular_product['image'], 0, 128, 'utf-8')?>" alt="">
                        <div class="caption">
                            <?php
                                $unit_of_measurement='кг.';
                                if($popular_product['unit_of_measurement']==1) $unit_of_measurement='шт.';
                            ?>
                            <b><?=$popular_product['title']?></b>
                            <br>
                            <br>
                            <b>Цена за <?=mb_substr($unit_of_measurement, 0, 128, 'utf-8')?> от: <?=$popular_product['price_wholesale']?> руб.</b>
                            <br>
                            <?php if($popular_product['unit_of_measurement']==1){ ?>
                            <b>Цена за кг.: <?=$popular_product['price']?> руб.</b>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
    <!-- Positive Me Section -->
    <section id="positive" class="content-section text-center">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h2>Наши преимущества</h2>
                <p>Мы такие растакие, это нужно описать все по полочком простым строительным языком с Привлечением Сергея Владимировича. Нужны именно те слова и факторы которые цепляют строителей и желательно не зависимо от возроста, так как пользователи интернета в основном молодое поколение, но не только же они.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="download-section content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Контакты Pro100Крепеж</h2>
                    <p>Загляните, и убедитесь во всех достонствах наших магазинов!</p>
                    <p>Адрес: Ивановский район, д. Коляново, ул. Загородная, д. 1.</p>
                    <p>Контактный телефон:56-59-10</p>
                    <p>E-mail: tehno-37@mail.ru</p>
                    <p>Отзывы: google, 2gis, yandex, zoon.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map
    <div id="map"></div>
    /*<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;load=package.full" type="text/javascript">
    </script>
    
    <script type="text/javascript">
        ymaps.ready(init);
        var myMap, 
            myPlacemark;

        function init(){ 
            myMap = new ymaps.Map("map", {
                center: [56.946757, 40.971894 ],
                zoom: 13
            }); 
            
            myPlacemark = new ymaps.Placemark([ 56.946757, 40.971894], {
                hintContent: 'Про100Крепеж',
                balloonContent: 'ул. Загородная, д.1'
            });
            
            myMap.geoObjects.add(myPlacemark);
        }
    </script>
    -->

<?php
include_once 'app/footer.php';

//$var = include ''; возвращает результат при успешном подключении возвращает 1,
//и все что возвращает вызываемый файл
//использует объявленные внутри функции
//include_once '';//единожды
//require ''; и возвращает, но падает если вызываются несуществующие файлы
//require_once '';//единожды
?>