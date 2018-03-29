<div class="container-fluid">
    <div class="container">
        <div class="row">

            <h1 class="caption_title_all_n1">Каталог ковриков</h1>

            <h2 class="caption_title_all_n2">Выберите марку своего автомобиля</h2>


            <div class="hidden-xs hidden-sm col-md-4 col-lg-3" style="padding: 0;">

                <?php
                v_marks_title_list()
                ?>

            </div>

            <div class="col-xs-12 col-sm-12 hidden-md hidden-lg div_catalog_input_search">
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
            </div>

            <div class="col-md-8 col-lg-9">

                <?php
                    v_marks_logo_list();
                ?>

            </div>

        </div>
    </div>
</div>