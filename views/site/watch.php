<?php
$this->registerJsFile('/web/assets/myScripts/script.js');
?>
<h1>hello!</h1><br>
<div id="carousel-example-generic" class="carousel slide" data-touch="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <!-- первый итем -->
    <div class="item active">
      <video controls="controls" autoplay="autoplay" width="100%" height="100%"><source src="/web/uploads/video.mp4" type="video/mp4"></video>
      <div class="carousel-caption">
      <h3>Первый сезон</h3>
        <p>первая серия</p>
      </div>
    </div>
    <!-- второй итем -->
    <div class="item">
    <video controls="controls" autoplay="autoplay" width="100%" height="100%"><source src="/web/uploads/video.mp4" type="video/mp4"></video>
      <div class="carousel-caption">
      <h3>Первый сезон</h3>
        <p>первая серия</p>
      </div>
    </div>
    <!-- третий итем -->
    <div class="item">
    <video controls="controls" autoplay="autoplay" width="100%" height="100%"><source src="/web/uploads/video.mp4" type="video/mp4"></video>
      <div class="carousel-caption">
        <h3>Первый сезон</h3>
        <p>первая серия</p>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



