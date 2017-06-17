<?php

$str = file_get_contents('api\obras.json');

$json = json_decode($str, true);

 ?>

<section>
<div class="container">
  <br>
  <div class="row"><div class="col-md-12 text-center"><h3>Admin - Agregar items</h3></div></div>

  <div class="grid"  data-masonry='{ "itemSelector": ".grid-item" }'>
    <!-- <div class="grid-sizer col-md-4 col-sm-6 col-xs-12"></div> -->

    <?php foreach ($json['obras'] as $key): ?>
      <div class="grid-item col-md-4 col-sm-6 col-xs-12">
        <div class=" grid-item-content card-obra">
          <div class="back-img" style="background-image: url('uploads/<?php echo  $key['imagen'] ?>');"></div>
            <div class="detalles">
              <a class="categoria" href="#"><?php echo $key['categoria'] ?></a>
              <h4><?php echo $key['titulo'] ?></h4>

              <div class="descripcion"><p><?php echo $key['descripcion'] ?></p></div>
            </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>

  <div class="row">



    <!-- <?php foreach ($json['obras'] as $key): ?>
      <div class="col-md-4 col-xs-12">
        <div class="card-obra">
          <div class="back-img" style="background-image: url('uploads/<?php echo  $key['imagen'] ?>');"></div>
            <div class="detalles">
              <a class="categoria" href="#"><?php echo $key['categoria'] ?></a>
              <h4><?php echo $key['titulo'] ?></h4>

              <div class="descripcion"><?php echo $key['descripcion'] ?></div>
            </div>
        </div>
      </div>
    <?php endforeach; ?> -->

  </div>
</div>
</section>
