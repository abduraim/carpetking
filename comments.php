<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1 class="caption_title_all_n1">Отзывы клиентов</h1>

            <h4>Последние <?php $var=v_comments_count(); echo $var; ?> комментариев:</h4>

            <?php v_comments_list(v_comments_count());  ?>

            <div class="col-xs-12 text-center">
                <a href="?page=add_comment" class="btn btn-success" style="margin-right: -15px">ОСТАВИТЬ ОТЗЫВ</a>
            </div>

            <div class="col-xs-12"><br></div>

        </div>
    </div>
</div>