<?php
namespace controller;
require_once("./src/view/HomeView.php");

class HomeController {
    private $view;
    private $model;

    // Constructor, connects all the layers
    public function __construct() {
        $this->homeView = new \view\HomeView();
    }

    public function checkActions() {
          return $this->homeView->showPage();
    }
}
