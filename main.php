<div class="container-fluid">
    <div class="container">
        <div class="row">


            <img src="img/main_img.jpg" class="img-responsive">



            <h3 class="caption_title_all_n1">Галерея</h3>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <a class="fancyimage" data-fancybox-group="group" href="img/gallery/01.jpg">
                    <img class="img-responsive thumbnail" src="img/gallery/01m.jpg">
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <a class="fancyimage" data-fancybox-group="group" href="img/gallery/02.jpg">
                    <img class="img-responsive thumbnail" src="img/gallery/02m.jpg">
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <a class="fancyimage" data-fancybox-group="group" href="img/gallery/03.jpg">
                    <img class="img-responsive thumbnail" src="img/gallery/03m.jpg">
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <a class="fancyimage" data-fancybox-group="group" href="img/gallery/04.jpg">
                    <img class="img-responsive thumbnail" src="img/gallery/04m.jpg">
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <a class="fancyimage" data-fancybox-group="group" href="img/gallery/05.jpg">
                    <img class="img-responsive thumbnail" src="img/gallery/05m.jpg">
                </a>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                <a class="fancyimage" data-fancybox-group="group" href="img/gallery/06.jpg">
                    <img class="img-responsive thumbnail" src="img/gallery/06m.jpg">
                </a>
            </div>

            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/07.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/08.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/09.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/10.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/11.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/12.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/13.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/14.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/15.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/16.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/17.jpg"></a>
            <a class="fancyimage" data-fancybox-group="group" href="img/gallery/18.jpg"></a>






        </div>



        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <h3 class="caption_title_all_n1">Поиск автомобиля</h3>

                <form method="post">

                    <div class="input-group">
                        <input type="text" class="form-control" list="marks" name="mobile_mark_list">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-play"></span></button>
                        </span>
                        <datalist id="marks">
                            <?php v_mark_title_list_for_input(); ?>
                        </datalist>
                    </div>

                </form>

                <div class="col-xs-12">
                    <div class="caption_title_all_n1">Достоинства наших ковриков:</div>
                    <ul class="fa-ul div_benefits_up">
                        <li><i class="fa-li fa fa-check"></i>Идеальная геометрия</li>
                        <li><i class="fa-li fa fa-check"></i>Чистота и сухость в салоне</li>
                        <li><i class="fa-li fa fa-check"></i>Презентабельный внешний вид</li>
                        <li><i class="fa-li fa fa-check"></i>Оригинальный штатный крепеж</li>
                        <li><i class="fa-li fa fa-check"></i>Перемычка в комплекте</li>
                    </ul>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="col-md-12">
                    <div class="caption_title_all_n1">Каталог Автомобилей:</div>
                </div>
                <?php v_marks_title_list_for_main(); ?>
            </div>

        </div>




    </div>
</div>



<div class="container-fluid">
    <div class="container fill_blue container_benefits">
        <h3 class="uppercase" style="margin-bottom: 1.5em">Что такое коврики CARPET<b>KING</b>?</h3>

        <?php v_benefits_main(); ?>

    </div>
</div>
