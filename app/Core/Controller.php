<?php
namespace App\Core;

abstract class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require_once "../app/Views/layouts/main.php";
    }
    
    protected function redirect($url) {
        header("Location: /$url");
        exit;
    }
}