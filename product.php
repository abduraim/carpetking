<div class="container-fluid">
    <div class="container">
        <div class="row">


            <div class="col-xs-12">
                <a href="?page=catalog">Каталог</a>
                <?=' / '?>
                <a href="?page=catalog&mark=<?=$_GET['mark']?>"><?php v_mark_title($_GET['mark']) ?></a>
                <?=' / '?>
                <?php v_model_title($_GET['model']) ?>
            </div>

            <br>
            <br>

            <h2 class="caption_title_all_n2">Выберите коврики для <b><?php v_mark_title($_GET['mark']) ?> <?php v_model_title($_GET['model']) ?></b></h2>


            <div class="row">
                <?php v_mats_list_block(); ?>
            </div>


        </div>
    </div>
</div>