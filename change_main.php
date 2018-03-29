<?php

if ( isset($_POST['main_inf']) ) {
    require_once 'model.php';
    $var = new M_maininf();
    $var->update_main_inf($_POST['site_title'], $_POST['address'], $_POST['telephone'], $_POST['schedule']);
}

if ( isset($_POST['benefit_main']) ) {

    require_once 'model.php';
    $var = new M_benefits_main();

    for ($i = 0; $i < $_POST['count']; $i++) {
        $id = 'id'.$i;
        $title = 'title'.$i;
        $text = 'text'.$i;
        $icon = 'icon'.$i;
        $var->update_benefits_main_inf($_POST[$id], $_POST[$title], $_POST[$text], $_POST[$icon]);
    }
}

?>

<script type="text/javascript">
    location.replace("index.php?page=admin&section=main");
</script>
