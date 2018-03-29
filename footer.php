<div class="container-fluid">
    <div class="container container_footer">
        <div class="row">

            <div class="col-sm-6 col-md-4 div_footer_social">


                <div class="hidden-xs">

                    <div class="caption_social">Мы в социальных сетях:</div>

                    <a href="https://vk.com/carpetking_ru" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
                            </span>
                    </a>

                    <a href="http://www.twitter.com" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                    </a>


                    <a href="http://www.facebook.com" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                    </a>


                    <a href="http://www.google.com" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span>
                    </a>

                </div>

                <div class="visible-xs cent">

                    <div class="caption_social cent">Мы в социальных сетях:</div>

                        <a href="https://vk.com/carpetking_ru" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>

                        <a href="http://www.twitter.com" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>


                        <a href="http://www.facebook.com" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>


                        <a href="http://www.google.com" target="_blank">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>


                </div>

            </div>

            <div class="col-sm-6 col-md-4 div_footer_menu">
                <ul>
                    <li><a href="?page=main">Главная</a></li>
                    <li><a href="?page=catalog">Каталог ковриков</a></li>
                    <li><a href="?page=gallery">Галерея</a></li>
                    <!--<li><a href="?page=about">О наших ковриках</a></li>-->
                    <!-- <li><a href="?page=howtobuy">Как купить</a></li> -->
                    <li><a href="?page=delivery">Доставка и оплата</a></li>
                    <li><a href="?page=comments">Отзывы</a></li>
                    <li><a href="?page=contacts">Контакты</a></li>
                    <li><a href="?page=basket">Корзина</a></li>
                    <?php if( isset($_SESSION['login'])) {
                        echo "<li><a href='?page=admin'>Настройки</a></li>";
                    } ?>
                </ul>
            </div>

            <div class="col-sm-12 col-md-4 div_footer_contacts">
                <h4 class="right bold"><i class="fa fa-phone"></i> <?php v_main_inf('telephone'); ?></h4>
                <h5 class="right"><?php v_main_inf('schedule'); ?></h5>
                <?php if( !isset($_SESSION['login']) ) {
                    ?>
                        <a href="?page=login"><div class="div_login">.</div></a>
                    <?php
                } else {
                    ?>
                        <a href="?page=logout&from=<?php if( isset($_GET['page']) ) {echo $_GET['page']; } else {echo 'main';} ?>"><div class="div_login">X</div></a>
                    <?php
                } ?>

            </div>

        </div>
    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>

<!-- Подключение JS файла Fancybox -->
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("a.fancyimage").fancybox();
    });
</script>

</body>
</html>