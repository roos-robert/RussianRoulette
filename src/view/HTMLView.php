<?php
class HTMLView {
    private $model;
    public function __construct()
    {
      // LEFT EMPTY INTENTIONALLY.
    }
    public function echoHTML($body)
    {
        if ($body === NULL)
        {
              throw new \Exception("HTMLView::echoHTML does not allow body to be null");
        }
        
        echo '
          <!DOCTYPE html>
          <html lang="en">
            <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name="description" content="">
              <meta name="author" content="">
              <link rel="icon" href="../../favicon.ico">
              <title>Russian Roulette</title>
              <link href="src/css/bootstrap.min.css" rel="stylesheet">
              <link href="src/css/sticky-footer-navbar.css" rel="stylesheet">
              <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->
            </head>

            <body>
              <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Russian Roulette</a>
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Home</a></li>
                    </ul>
                  </div>
                </div>
              </nav>

              <div class="container">
                <div class="page-header">
                  <h1>Russian Roulette</h1>
                </div>';
                echo "
                  $body
              </div>

              <footer class='footer'>
                <div class='container'>
                  <p class='text-muted'>Copyright &copy; - Russian Mob 2016</p>
                </div>
              </footer>

              <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
              <script src='src/js/bootstrap.min.js'></script>
              <script src='src/js/ajax.js'></script>
            </body>
          </html>";
    }
}
?>
