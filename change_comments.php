<?php

if ( isset($_GET['act']) && isset($_GET['id']) ) {
    require_once 'model.php';
    $var = new M_comments();
    $var->delete_comment($_GET['id']);
}

if ( isset($_POST['comments_setting']) ) {
    if ($_POST['comments_setting'] != '') {
        require_once 'model.php';
        $var = new M_maininf();
        $var->change_comment_count($_POST['comments_setting']);
    }
}

if ( isset($_POST['comment']) ) {

    if ( isset($_POST['visible']) ) { $_POST['visible'] = 1; }
    require_once 'model.php';
    $var = new M_comments();
    $var->update_comment($_POST['id'], $_POST['name'], $_POST['comment'], $_POST['date'], $_POST['img'], $_POST['visible']);
}

?>

<script type="text/javascript">
    location.replace("index.php?page=admin&section=comments");
</script>
