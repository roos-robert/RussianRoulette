<?php
namespace model;

class RouletteModel {
    private $userChoice;
    private $slotToFire;

    // On init, the position the bullet will be in is set.
    public function __construct() {
        $this->setSlotToFire();
    }

    // Function for retrieving what slot is going to get fired.
    public function getSlotToFire() {
        return $this->slotToFire;
    }

    // Function for retrieving in which slot the user placed the bullet.
    public function getUserChoice() {
        return $this->userChoice;
    }

    // Function for setting which slot the user places the bullet.
    public function setUserChoice($userChoice) {
        $this->userChoice = $userChoice;
    }

    // Randomly sets the spot that will be fired after "spinning the barrel".
    public function setSlotToFire() {
        $this->slotToFire = rand(1,6);
    }
}
