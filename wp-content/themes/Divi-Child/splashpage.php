<?php /* Template Name: Splash Page */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
    
<style type="text/css">
    .splash-wrapper {
        color:#ffffff; 
        padding:20px 20px 0 20px;
    }

    .page-template-splashpage h2 {
        color: #ffffff;
    }

    #gform_wrapper_1 {
        margin: 16px auto;
        max-width: 50%;
    }

    #gform_wrapper_1 form {
        text-align: center;
    }

    #gform_wrapper_1 .gfield_label {
        display: none;
    }

    #gform_wrapper_1 #input_1_1 {
        display: inline-block
    }

    #gform_wrapper_1 .field_description_below .gfield_description {
        font-size: 12px;
        font-style: italic;
    }

    .validation_error {
        display: none;
    }
    .button {
        background-color: #222;
        border: 0;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-size: 0.875rem;
        font-weight: 800;
        line-height: 1;
        padding: 1em 2em;
        text-shadow: none;
        -webkit-transition: background 0.2s;
        transition: background 0.2s;
    }
    .button:hover {
        background: #767676;
    }
</style>
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