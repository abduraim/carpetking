<?php

require_once 'model.php';

class C_maininf extends M_maininf {

    function get_main_inf() {
        $res = $this->return_main_inf();
        $main_inf = mysqli_fetch_assoc($res);
        return $main_inf;
    }

    function get_comments_count() {
        $res = $this->return_comments_count();
        $com_count = mysqli_fetch_assoc($res);
        $comments_count = $com_count['comments_count'];
        return $comments_count;
    }

}

class C_benefits_main extends M_benefits_main {

    function get_benefits_main() {
        $res = $this->return_benefits_inf();
        $benefits_main_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $benefits_main_inf[] = $row;
        }
        return $benefits_main_inf;
    }

}

class C_marks extends M_marks {

    function get_mark_title($mark) {
        $res = $this->return_mark_title($mark);
        $mark_title = mysqli_fetch_assoc($res);
        return $mark_title;
    }

    function get_mark_name($mark) {
        $res = $this->return_mark_name($mark);
        $mark_name = mysqli_fetch_assoc($res);
        return $mark_name;
    }

    function get_mark_title_rus($mark) {
        $res = $this->return_mark_title_rus($mark);
        $mark_title_rus = mysqli_fetch_assoc($res);
        return $mark_title_rus;
    }

    function get_model_title($model) {
        $res = $this->return_model_title($model);
        $model_title = mysqli_fetch_assoc($res);
        return $model_title;
    }

    function get_model_title_min($model) {
        $res = $this->return_model_title_min($model);
        $model_title_min = mysqli_fetch_assoc($res);
        return $model_title_min;
    }

    function get_marks_list() {
        $res = $this->return_marks_inf();
        $marks_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $marks_inf[] = $row;
        }
        return $marks_inf;
    }

    function get_marks_visible_list() {
        $res = $this->return_marks_visible_inf();
        $marks_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $marks_inf[] = $row;
        }
        return $marks_inf;
    }

    function get_models_list($mark) {
        $res = $this->return_models_inf($mark);
        $models_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $models_inf[] = $row;
        }
        return $models_inf;
    }

    function get_models_visible_list($mark) {
        $res = $this->return_models_visible($mark);
        $models_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $models_inf[] = $row;
        }
        return $models_inf;
    }

    function get_models_unique_list($mark) {
        $res = $this->return_models_unique_list($mark);
        $models_unique_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $models_unique_inf[] = $row;
        }
        return $models_unique_inf;
    }

    function get_models_names_list($mark) {

        $res = $this->return_models_names_list($mark);
        $models_names_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $models_names_inf[] = $row;
        }
        return $models_names_inf;
    }


}

class C_mats extends M_mats {

    function get_mats_list() {
        $res = $this->return_mats_inf();
        $mats_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $mats_inf[] = $row;
        }
        return $mats_inf;
    }

    function get_mat_title($mat) {
        $res = $this->return_mat_title($mat);
        $mat_title = mysqli_fetch_assoc($res);
        return $mat_title;
    }

    function get_materials_inf() {
        $res = $this->return_materials_inf();
        $materials_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $materials_inf[] = $row;
        }
        return $materials_inf;
    }

    function get_materials_list() {
        $res = $this->return_materials_visible_inf();
        $materials_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $materials_inf[] = $row;
        }
        return $materials_inf;
    }

    function get_materials_to_json() {
        $res = $this->return_materials_inf_to_json();
        $materials_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $materials_inf[] = $row;
        }
        return $materials_inf;
    }

    function get_material_title($material_id) {
        $res = $this->return_material_title($material_id);
        $material_title = mysqli_fetch_assoc($res);
        return $material_title;
    }

    function get_material_cost($material_id) {
        $res = $this->return_material_cost($material_id);
        $material_cost = mysqli_fetch_assoc($res);
        return $material_cost;
    }


    function get_edgings_list() {
        $res = $this->return_edgings_inf();
        $edgings_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $edgings_inf[] = $row;
        }
        return $edgings_inf;
    }

    function get_logos_list() {
        $res = $this->return_logos_inf();
        $logos_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $logos_inf[] = $row;
        }
        return $logos_inf;
    }

    function get_logo_title($logo_id) {
        $res = $this->return_logo_title($logo_id);
        $logo_title = mysqli_fetch_assoc($res);
        return $logo_title;
    }

    function get_logo_cost($logo_id) {
        $res = $this->return_logo_cost($logo_id);
        $logo_cost = mysqli_fetch_assoc($res);
        return $logo_cost;
    }


}



class C_comments extends M_comments {

    function get_comments_list($comments_count) {
        $res = $this->return_comments_inf($comments_count);
        $comments_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $comments_inf[] = $row;
        }
        return $comments_inf;
    }

    function get_comments_admin_list_all() {
        $res = $this->return_comments_admin_inf_all();
        $comments_inf = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $comments_inf[] = $row;
        }
        return $comments_inf;
    }

}

?>