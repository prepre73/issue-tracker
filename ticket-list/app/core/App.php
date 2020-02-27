<?php
class App {

    public function __construct () {
        echo "test";
        return echo $this->create_html ();
    }

    public function create_html () {
        ob_start();
        file_put_contents('index.html', ob_get_clean());
    }
}