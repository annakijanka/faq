<?php /* Template Name: FAQ Template */ ?>

<?php get_header(); ?>
<?php if( have_rows('faq') ): ?>
    <?php while( have_rows('faq') ): the_row(); ?>
        <?php if( get_row_layout() == 'headline' ):
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $description = get_sub_field('description');

            $headline = array(
                'headline_image' => $image['url'],
                'headline_alt' => $image['alt'],
                'headline_title' => $title,
                'headline_description' => $description,
            );

            set_query_var( 'headline', $headline );
            ?>
            <?php get_template_part( 'template-parts/template-faq/headline' ); ?>
        <?php elseif( get_row_layout() == 'questions' ):
            $question = get_sub_field('question');

            set_query_var( 'questions', $question );
            ?>
            <?php get_template_part( 'template-parts/template-faq/accordion' ); ?>
        <?php elseif( get_row_layout() == 'boxes' ):
            $image = get_sub_field('image');
            $box = get_sub_field('box');

            $boxes = array(
                'boxes_image' => $image['url'],
                'boxes_alt' => $image['alt'],
                'boxes_box' => $box,
            );

            set_query_var( 'boxes', $boxes );
            ?>
            <?php get_template_part( 'template-parts/template-faq/boxes' ); ?>
        <?php elseif( get_row_layout() == 'features' ):
            $headline = get_sub_field('headline');
            $feature = get_sub_field('feature');

            $features = array(
                'features_headline' => $headline,
                'features_feature' => $feature,
            );

            set_query_var( 'features', $features );
            ?>
            <?php get_template_part( 'template-parts/template-faq/features' ); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
