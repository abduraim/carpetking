<?php

class Config {
    function __construct() {
        $this->APP_PATH = dirname(dirname(__FILE__))."/";
    }

    var $APP_PATH ;

    var $BASE_URL = "luckycar24.ru";
    var $DB_HOST = "localhost";
    var $DB_USER = "root";
    var $DB_PASS = "";
    var $DB_NAME = "luckycar";

    var $ADM_PASS = "123"; //пароль к админке
}
$config = new Config();
?>