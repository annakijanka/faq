<?php $questions = get_query_var( 'questions' ); ?>

<?php if( $questions ): ?>
  <section>
    <div class="container container--narrower bg-alabaster position-relative mt-3 px-lg-0 mt-lg-n13">
      <div class="row">
        <div class="col">
          <ul class="accordion py-3 mt-3 px-lg-14 py-lg-8 mt-lg-0">
            <?php foreach( $questions as $question ):
                $heading = $question['heading'];
                $description = $question['description'];
                ?>
                <li>
                  <div class="accordion__heading"><?php echo $heading; ?></div>
                  <div class="accordion__description"><?php echo $description; ?></div>
                </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
