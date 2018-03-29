<?php

class Config {
    function __construct() {
        $this->APP_PATH = dirname(dirname(__FILE__))."/";
    }

    var $APP_PATH ;

    var $BASE_URL = "mylifepro.ru";
    var $DB_HOST = "localhost";
    var $DB_USER = "cg73152_luckycar";
    var $DB_PASS = "123";
    var $DB_NAME = "cg73152_luckycar";

    var $ADM_LOG = "123"; //логин к админке
    var $ADM_PASS = "123"; //пароль к админке
}
$config = new Config();
?>