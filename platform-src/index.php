<?php
  require_once('view/HTMLView.php');
  require_once('controller/NavigationController.php');

  $HTMLview = new HTMLView();
  $navigationCtrl = new \controller\NavigationController();
  $htmlBody = $navigationCtrl->doControll();
  $HTMLview->echoHTML($htmlBody);
?>
