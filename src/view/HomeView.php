<?php
namespace view;
class HomeView {
    private $model;
    public function __construct()
    {
      // NO MODEL NEEDED, LEFT EMPTY.
    }

    public function showPage() {
      $content =  "
          <div class='row'>
            <div class='col-md-8'>
              <h2>Welcome...</h2>
              <p>To a game of life and death. This is not about money, it's about survival.</p>
              <p>Pick a number, spin the barrel of the gun and cross your fingers...</p>
              <h3>Select a slot for the bullet</h3>
              ";

      for ($i = 1; $i <= 6; $i++) {
        $content .= "
          <label class='radio-inline'>
            <input type='radio' name='barrelPosition' id='inlineRadio$i' value='$i'> $i
          </label>";
      }

      $content .= "
          <div id='ResultBox'></div>
            <p><button id='PullTrigger' type='button' class='btn btn-danger btn-lg'>Spin the barrel and pull the trigger</button></p>
          </div>
          <div class='col-md-4'>
            <div class='rounded'>
              <img src='./src/gfx/revolver.jpg' alt='Revolver' />
            </div>
          </div>
        </div>";

      return $content;
    }
}
