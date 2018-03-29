<?php

if(!isset($_SESSION['login'])) {die();}

?>

<div class="panel panel-primary">
    <div class="panel-heading">Комментарии</div>
    <div class="panel-body">

        <form action="change_comments.php" method="post">
            <div class="col-xs-12">
                Количество комментариев на странице:
                <input name="comments_setting" type="number" min="0" max="100" value="<?php echo v_comments_count(); ?>"><br>
                <input type="submit" class="btn btn-success" value="Сохранить"><br><br>
            </div>
        </form>
            
        <div class="col-xs-12">
            <?php v_comments_admin_all(); ?>
        </div>

    </div>
</div>