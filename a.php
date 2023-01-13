<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php
  $xmldata = simplexml_load_file("https://www.geo.tv/rss/1/1")
  ?>

    <h1><?php echo $xmldata->channel->title ?></h1>
    <div class="accordion" id="accordionExample">
    <?php
    $i =1;
    foreach($xmldata->channel->item as $data){
    ?>
    <div class="accodion_item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion_button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i?>" aria-expanded="true"  aria-controls="multiCollapseExample1">
        <?php
        echo $data->title
         ?>
        </button>
        </h2>
        <div id="collapse<?php echo $i?>" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accodionExample">
        <div class="accordion-body">
        <?php
        echo $data->description
         ?>
        </div>
       </div>
    </div>
    <?php $i++; } ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>