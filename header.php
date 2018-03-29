<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php v_main_inf('site_title'); ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon.png" />



    <meta name="google-site-verification" content="R_7jBPwW-tP9AXIjoHANO8HKatQGhWf6hUnmKF4JTqU" />





    <!-- подключение CSS файла Fancybox -->
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!— Yandex.Metrika counter —>
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter38659855 = new Ya.Metrika({
                        id:38659855,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/38659855" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!— /Yandex.Metrika counter —>



    <!— GoogleAnalytics —>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-82082467-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!— GoogleAnalytics —>




</head>
<body>

<div class="container-fluid">

    <div class="container"  style="margin-top: 2em; margin-bottom: 1em;">
        <div class="row">

            <a href=".">
            <div class="hidden-xs col-sm-5 col-md-4">
                <div class="font_logo">CARPET<b>KING</b></div>
                <div class="uppercase">Автомобильные коврики</div>
            </div>

            <div class="col-xs-12 visible-xs div_header_logo cent">
                <div class="font_logo">CARPET<b>KING</b></div>
                <div class="uppercase">Автомобильные коврики</div>
            </div>
            </a>

            <div class="col-xs-12 col-sm-4 col-md-6">
                <h4 class="right bold"><i class="fa fa-phone"></i> <?php v_main_inf('telephone'); ?></h4>
                <h5 class="right"><?php v_main_inf('schedule'); ?></h5>
            </div>

            <div class="col-xs-12 col-sm-3 col-md-2 right">
                <a href="?page=call_me" class="btn btn-success" style="margin-right: -15px">Заказать звонок</a>
                <div style="font-size: x-small; margin-right: -15px; margin-top: 5px">Позвоним в течение 5 минут</div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#resp-menu">
                        <span class="sr-only">Открыть меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Меню</span>
                </div>
                <div class="collapse navbar-collapse" id="resp-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="?page=main">Главная</a></li>
                        <li><a href="?page=catalog">Каталог ковриков</a></li>
                        <li><a href="?page=gallery">Галерея</a></li>
                        <!--<li><a href="?page=about">О наших ковриках</a></li>-->
                        <!-- <li><a href="?page=howtobuy">Как купить</a></li> -->
                        <li><a href="?page=delivery">Доставка и оплата</a></li>
                        <li><a href="?page=comments">Отзывы</a></li>
                        <li><a href="?page=contacts">Контакты</a></li>
                        <li><a href="?page=basket">Корзина <?php v_basket_badge($_SESSION['basket']); ?></a></li>
                        <?php if( isset($_SESSION['login'])) {
                            echo "<li><a href='?page=admin'>Настройки</a></li>";
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>