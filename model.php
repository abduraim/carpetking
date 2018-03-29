<?php

require_once 'config/db.php';

class M_maininf extends Db {

    function return_main_inf() {
        $sql = 'SELECT site_title, address, telephone, schedule FROM settings WHERE id=1';
        return $this->sql($sql);
    }

    function update_main_inf($site_title, $address, $telephone, $schedule) {
        $sql = "UPDATE settings SET site_title='$site_title', address='$address', telephone='$telephone', schedule='$schedule'";
        return $this->sql($sql);
    }

    function return_comments_count() {
        $sql = 'SELECT comments_count FROM settings';
        return $this->sql($sql);
    }

    function change_comment_count($comment_count) {
        $sql = "UPDATE settings SET comments_count='$comment_count'";
        return $this->sql($sql);
    }

}

class M_benefits_main extends Db {

    function return_benefits_inf() {
        $sql = 'SELECT id, title, text, icon FROM benefits_main';
        return $this->sql($sql);
    }

    function update_benefits_main_inf($id, $title, $text, $icon) {
        $sql = "UPDATE benefits_main SET title='$title', text='$text', icon='$icon' WHERE id='$id'";
        return $this->sql($sql);
    }

}



class M_marks extends Db {

    function return_mark_title($mark) {
        $sql = "SELECT title FROM marks WHERE name='$mark' LIMIT 1";
        return $this->sql($sql);
    }

    function add_mark($title, $title_rus, $name, $img, $visible) {
        $sql = "INSERT INTO marks (title, title_rus, name, img, visible) VALUES ('$title', '$title_rus', '$name', '$img', '$visible')";
        return $this->sql($sql);
    }

    function delete_mark($id) {
        $sql = "DELETE FROM marks WHERE id='$id'";
        return $this->sql($sql);
    }

    function update_mark_inf($id, $title, $title_rus, $name, $img, $visible) {
        $sql = "UPDATE marks SET title='$title', title_rus='$title_rus', name='$name', img='$img', visible='$visible' WHERE id='$id'";
        return $this->sql($sql);
    }

    function return_mark_title_rus($mark) {
        $sql = "SELECT title_rus FROM marks WHERE name='$mark' LIMIT 1";
        return $this->sql($sql);
    }

    function return_mark_name($mark) {
        $sql = "SELECT name FROM marks WHERE title='$mark' LIMIT 1";
        return $this->sql($sql);
    }

    function return_model_title($model) {
        $sql = "SELECT title FROM models WHERE name='$model' LIMIT 1";
        return $this->sql($sql);
    }

    function return_model_title_min($model) {
        $sql = "SELECT model_name FROM models WHERE name='$model' LIMIT 1";
        return $this->sql($sql);
    }

    function return_marks_inf() {
        $sql = 'SELECT id, title, title_rus, name, img, visible FROM marks ORDER BY title ASC';
        return $this->sql($sql);
    }

    function return_marks_visible_inf() {
        $sql = 'SELECT id, title, title_rus, name, img, visible FROM marks WHERE visible=1 ORDER BY title ASC';
        return $this->sql($sql);
    }

    function  return_models_inf($mark) {
        $sql = "SELECT id, model_name, title, name, img, visible FROM models WHERE mark_name = '$mark' ORDER BY title, model_name ASC";
        return $this->sql($sql);
    }

    function add_model($mark_name, $title, $model_name, $name, $img, $visible) {
        $sql = "INSERT INTO models (mark_name, title, model_name, name, img, visible) VALUES ('$mark_name', '$title', '$model_name', '$name', '$img', '$visible')";
        return $this->sql($sql);
    }

    function delete_model($id) {
        $sql = "DELETE FROM models WHERE id='$id'";
        return $this->sql($sql);
    }

    function update_model_inf($id, $title, $model_name, $name, $img, $visible) {
        $sql = "UPDATE models SET title='$title', model_name='$model_name', name='$name', img='$img', visible='$visible' WHERE id='$id'";
        return $this->sql($sql);
    }

    function  return_models_visible($mark) {
        $sql = "SELECT title, name, model_name, img FROM models WHERE mark_name = '$mark' AND visible = TRUE ORDER BY model_name, title ASC";
        return $this->sql($sql);
    }

    function return_models_unique_list($mark) {
        $sql = "SELECT model_name, count(*) AS count_m FROM models WHERE mark_name = '$mark' AND visible = TRUE GROUP BY model_name ORDER BY model_name ASC";
        return $this->sql($sql);
    }

    function return_models_names_list($mark) {
        $sql = "SELECT model_name FROM models WHERE mark_name = '$mark' GROUP BY model_name ORDER BY model_name ASC";
        return $this->sql($sql);
    }


}



class M_mats extends Db {

    function return_mats_inf() {
        $sql = 'SELECT title, name FROM mats WHERE visible = TRUE ORDER BY position ASC';
        return $this->sql($sql);
    }

    function return_mat_title($mat) {
        $sql = "SELECT title FROM mats WHERE name='$mat' LIMIT 1";
        return $this->sql($sql);
    }

    function return_materials_inf() {
        $sql = 'SELECT id, title, name, cost, img_1, img_1_min, img_2, img_2_min, height_pile, density_pile, dept_canvas, type_pile, colors, description, position, visible FROM materials ORDER BY position ASC';
        return $this->sql($sql);
    }

    function update_materials_inf($id, $title, $name, $cost, $density_pile, $dept_canvas, $type_pile, $colors, $description, $position, $visible) {
        $sql = "UPDATE materials SET title='$title', name='$name', cost='$cost', density_pile='$density_pile', dept_canvas='$dept_canvas', type_pile='$type_pile', colors='$colors', description='$description', position='$position', visible='$visible' WHERE id='$id'";
        return $this->sql($sql);
    }

    function return_materials_visible_inf() {
        $sql = 'SELECT id, title, name, cost, img_1, img_1_min, img_2, img_2_min, height_pile, density_pile, dept_canvas, type_pile, colors, description, position, visible FROM materials WHERE visible = TRUE ORDER BY position ASC';
        return $this->sql($sql);
    }

    function return_materials_inf_to_json() {
        $sql = 'SELECT id, title, name, cost FROM materials WHERE visible = TRUE ORDER BY position ASC';
        return $this->sql($sql);
    }

    function return_material_title($material_id) {
        $sql = "SELECT title FROM materials WHERE id='$material_id' LIMIT 1";
        return $this->sql($sql);
    }

    function return_material_cost($material_id) {
        $sql = "SELECT cost FROM materials WHERE id='$material_id' LIMIT 1";
        return $this->sql($sql);
    }

    function return_edgings_inf() {
        $sql = 'SELECT id, title, name, cost FROM edgings WHERE visible = TRUE ORDER BY position ASC';
        return $this->sql($sql);
    }

    function return_logos_inf() {
        $sql = 'SELECT id, title, name, cost FROM logos WHERE visible = TRUE ORDER BY position ASC';
        return $this->sql($sql);
    }

    function return_logo_title($logo_id) {
        $sql = "SELECT title FROM logos WHERE id='$logo_id' LIMIT 1";
        return $this->sql($sql);
    }

    function return_logo_cost($logo_id) {
        $sql = "SELECT cost FROM logos WHERE id='$logo_id' LIMIT 1";
        return $this->sql($sql);
    }

}



class M_comments extends Db {

    function return_comments_inf($comments_count) {
        $sql = "SELECT name, comment, date, img FROM comments WHERE visible = TRUE ORDER BY date DESC LIMIT $comments_count";
        return $this->sql($sql);
    }

    function add_comment($name, $comment) {
        $sql = "INSERT INTO comments (name, comment, visible) VALUES ('$name', '$comment', 0)";
        return $this->sql($sql);
    }

    function delete_comment($id) {
        $sql = "DELETE FROM comments WHERE id='$id'";
        return $this->sql($sql);
    }

    function update_comment($id, $name, $comment, $date, $img, $visible) {
        $sql = "UPDATE comments SET name='$name', comment='$comment', date='$date', img='$img', visible='$visible' WHERE id='$id'";
        return $this->sql($sql);
    }

    function return_comments_admin_inf_all() {
        $sql = 'SELECT name, comment, date, img, visible, id FROM comments ORDER BY date DESC';
        return $this->sql($sql);
    }

}



?>