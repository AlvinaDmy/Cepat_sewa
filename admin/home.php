<style>
  /* Style untuk header */
  .text-light {
    color: #fff;
  }

  /* Style untuk garis pemisah */
  hr {
    border-top: 1px solid #ccc;
    margin: 20px 0;
  }

  /* Style untuk container */
  .container {
    max-width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  /* Style untuk carousel */
  #tourCarousel {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    /* Mengatur rasio aspek 16:9 */
    overflow: hidden;
  }

  .carousel-inner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .carousel-item {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .carousel-item img {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: 5%;
    color: #fff;
    font-size: 24px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  .carousel-control-prev:hover .carousel-control-prev-icon,
  .carousel-control-next:hover .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.8);
  }
</style>
<h1 class="text-light">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr>
<div class="container">
  <?php
  $files = array();
  $rooms = $conn->query("SELECT * FROM `room_list` order by rand() ");
  while ($row = $rooms->fetch_assoc()) {
    if (!is_dir(base_app . 'uploads/room_' . $row['id']))
      continue;
    $fopen = scandir(base_app . 'uploads/room_' . $row['id']);
    foreach ($fopen as $fname) {
      if (in_array($fname, array('.', '..')))
        continue;
      $files[] = validate_image('uploads/room_' . $row['id'] . '/' . $fname);
    }
  }
  ?>
  <div id="tourCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner h-100">
      <?php foreach ($files as $k => $img) : ?>
        <div class="carousel-item  h-100 <?php echo $k == 0 ? 'active' : '' ?>">
          <img class="d-block w-100  h-100" src="<?php echo $img ?>" alt="">
        </div>
      <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#tourCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#tourCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>