<?php $headline = get_query_var( 'headline' );
$srcset = wp_get_attachment_image_srcset( $headline['headline_ID'] ); ?>

<section>
  <div class="container">
    <div class="row align-items-end">
      <div class="col-12 col-lg-6">
        <h1><?php echo $headline['headline_title']; ?></h1>
      </div>
      <div class="col-12 col-lg-6">
        <p><?php echo $headline['headline_description']; ?></p>
      </div>
      <div class="col-12">
        <img class="w-100 mt-3" src="<?php echo $headline['headline_image']; ?>" srcset="<?php echo $srcset; ?>" alt="<?php echo $headline['headline_alt']; ?>">
      </div>
    </div>
  </div>
</section>
