<div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php if(!isset($_SESSION['login'])) {die();} ?>

            <h1 class="caption_title_all_n1">Панель администратора</h1>

            <?php

            require_once 'admin/panel.php';

            if ( isset($_GET['section']) ) {
                switch($_GET['section']) {
                    case 'main':
                        require_once 'admin/main.php';
                        break;
                    case 'marks':
                        require_once 'admin/marks.php';
                        break;
                    case 'models':
                        require_once 'admin/models.php';
                        break;
                    case 'materials':
                        require_once 'admin/materials.php';
                        break;
                    case 'comments':
                        require_once 'admin/comments.php';
                        break;
                    default:
                        require_once 'admin/main.php';
                        break;
                }
            } else {require_once 'admin/main.php';}

            ?>




        </div>
    </div>
</div>