<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h2 class="caption_title_all_n2">
                Выберите модель <?php v_mark_title($_GET['mark']); ?>
            </h2>
        </div>
        <div class="row">

            <div class="col-xs-12 div_models_listblock cent">
                <div class="btn-group">
                    <?php
                        v_models_title_list($_GET['mark']);
                    ?>
                </div>
            </div>

        </div>

        <div class="row">

            <?php
            v_models_img_list($_GET['mark']);
            ?>

        </div>


    </div>
</div>