<?php
require_once 'config/config_loc.php';

class Db extends Config {

    private $connection;

    function __construct() {

        $this->open_connection();
    }

    private function open_connection() {

        $this->connection = mysqli_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

        if (!$this->connection) {
            die("Ошибка подключения к БД: ".mysqli_error());
        }

        mysqli_set_charset($this->connection,'utf8');
    }

    public function sql($query) {

        $result = mysqli_query($this->connection,$query);

        if (!$result) {
            die ("Ошибка запроса к БД: ".mysqli_error());
        }

        return $result;
    }
}

$db = new Db();

?>