<?php $features = get_query_var( 'features' ); ?>

<section>
  <div class="container-fluid bg-alabaster text-center mt-4 mt-lg-5 py-4 py-lg-5">
    <div class="container--narrower mx-auto">
      <div class="row">
        <div class="col-12 mb-2 mb-lg-0">
          <h2><?php echo $features['features_headline']; ?></h2>
        </div>
        <?php if( $features['features_feature'] ): ?>
          <?php foreach( $features['features_feature'] as $feature ):
              $upper_text = $feature['upper_text'];
              $value = $feature['value'];
              $lower_text = $feature['lower_text'];
              ?>
              <div class="col-12 col-lg-4 mt-lg-5">
                <div class="feature">
                  <p class="feature__text"><?php echo $upper_text; ?></p>
                  <p class="feature__value"><?php echo $value; ?></p>
                  <p class="feature__text"><?php echo $lower_text; ?></p>
                </div>
              </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
