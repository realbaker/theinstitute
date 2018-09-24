<?php /* Template Name: Splash Page */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-color:#363636;">
    <div class="splash-wrapper">
        <?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>
    </div>
    
<?php wp_footer(); ?>

</body>
</html>