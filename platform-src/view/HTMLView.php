<?php
class HTMLView {
    private $model;
    public function __construct()
    {
      
    }
    public function echoHTML($body)
    {
        if ($body === NULL) {
              throw new \Exception("HTMLView::echoHTML does not allow body to be null");
            }
        echo $body;
    }
}
?>
