<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h1 class="caption_title_all_n1">Добавить отзыв</h1>

            <div class="hidden-xs col-sm-2 col-md-3"></div>
            <div class="col-xs-12 col-sm-8 col-md-6">

                <form method="post" action="send_comment.php" class="div_order_form">
                    <div class="form-group">
                        <label for="name">Ваше имя</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите Ваше имя">
                    </div>

                    <div class="form-group">
                        <label for="comment">Ваш отзыв</label>
                        <textarea name="comment" id="comment" rows="5" class="form-control" placeholder="Будем рады узнать Ваше мнение о нашей работе"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Отправить">
                </form>

            </div>
            <div class="hidden-xs col-sm-2 col-md-3"></div>

        </div>
    </div>
</div>