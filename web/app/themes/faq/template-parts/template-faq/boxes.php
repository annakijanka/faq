<?php $boxes = get_query_var( 'boxes' );
$srcset = wp_get_attachment_image_srcset( $boxes['boxes_ID'] ); ?>

<section>
  <div class="container-fluid px-0">
    <div class="row">
      <div class="col-12">
        <img class="w-100 mt-4 mt-lg-10" src="<?php echo $boxes['boxes_image']; ?>" srcset="<?php echo $srcset; ?>" alt="<?php echo $boxes['boxes_alt']; ?>">
      </div>
    </div>
  </div>
  <?php if( $boxes['boxes_box'] ): ?>
    <div class="container container--narrower position-relative px-0 mt-lg-n13">
      <div class="row mx-lg-n3">
        <?php foreach( $boxes['boxes_box'] as $box ):
            $contents = $box['contents'];
            ?>
            <div class="col-12 col-lg-6">
              <div class="bg-alabaster-09 px-3 py-4 px-lg-6 py-lg-5 mx-lg-3 h-100">
                <?php echo $contents; ?>
              </div>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
