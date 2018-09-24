<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular">
  <div class="et_pb_module et_pb_slider et_pb_slider_parallax  et_pb_fullwidth_slider_0 et_pb_bg_layout_dark"> 
    <div class="et_pb_slides">
      <div class="et_pb_slide et_pb_bg_layout_dark et_pb_slider_with_overlay et_pb_media_alignment_center et_pb_slide_0 et-pb-active-slide et_pb_section_parallax">
        <div class="et_parallax_bg et_pb_parallax_css" style="background-image: url(<?php the_field('event_header_background_image', 99) ?>);">
        </div>
        <div class="et_pb_slide_overlay_container"></div>
        <div class="et_pb_container clearfix">
          <div class="et_pb_slider_container_inner">
            <div class="et_pb_slide_description">
              <h2 class="et_pb_slide_title"><?php the_field('event_header_title', 99) ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="tribe-events-pg-template" class="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</div> <!-- #tribe-events-pg-template -->
<?php
get_footer();
