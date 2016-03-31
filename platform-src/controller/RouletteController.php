<?php
namespace controller;
require_once("view/RouletteView.php");
require_once("model/RouletteModel.php");

class RouletteController {
    private $view;
    private $model;

    // Constructor, connects all the layers
    public function __construct() {
        $this->model = new \model\RouletteModel();
    }

    public function checkActions() {
      if (isset($_GET["barrelValue"]))
      {
        // Updating the model with the chosen barrel position
        $this->model->setUserChoice($_GET["barrelValue"]);

        if ($this->model->getUserChoice() == $this->model->getSlotToFire())
        {
          $content = "<strong>BOM!</strong> You selected barrel slot <strong>" .  $this->model->getUserChoice() . "</strong> and unfortunately for you, that's the slot the hammer hit.";
          return $content;
        }
        else
        {
          $content = "<strong>Phew!</strong> You selected barrel slot <strong>" .  $this->model->getUserChoice() . "</strong> and since the barrel stopped at <strong>" . $this->model->getSlotToFire() . "</strong> you get to live another day... or for another spin?";
          return $content;
        }
      }
      else
      {
        return "Please run the game through the main application.";
      }
    }
}
