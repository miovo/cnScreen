<?php
    include("assets/configs/config.php");
?>
<html>
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <style type="text/css">
        
        .carousel-inner>.item {
            -webkit-transition: -webkit-transform 2s ease-in-out !important;
            -o-transition: -o-transform 1.2s ease-in-out !important;
            transition: transform 2s ease-in-out !important;
        }

      </style>

    </head>
    <body>

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8 no-float" style="padding-right: 0px; padding-left: 0px;">

                    <iframe src="<?php print($kioskURL); ?>" width="100%" height="100%" frameborder="0"></iframe>

                </div>
                <div class="col-md-4 no-float" style="background-color: <?php print($SidebarBGColor); ?>" >

                    <br>

              <!-- Camps/Events -->
                    <div class="card">
                      <h5 class="card-header">Upcoming Events at CN <?php print($locationName); ?></h5>
                      <div class="card-body">

                        <?php include 'events.php';?>

                    </div>
                 </div>

                    <br>

              <!-- Sensei -->
                    <div class="card">
                      <h5 class="card-header">Sensei In The Dojo</h5>
                      <div class="card-body">

                        <?php include 'sensei.php';?>

                      </div>
                    </div>

                </div>

            </div>
        </div>

    </body>
</html>
